from flask import Flask, render_template, redirect, url_for, session, request, jsonify

app = Flask(__name__)
app.secret_key = 'tu_clave_secreta_segura'

# Base de datos de usuarios (en producción usarías una base de datos real)
USERS_DB = {
    # Formato: username: {'password': 'pass', 'role': 1, 'name': 'Nombre'}
    'admin': {'password': 'admin', 'role': 1, 'name': 'Administrador Principal'},
    'tecnico1': {'password': 'tec123', 'role': 2, 'name': 'Juan Pérez'},
    'tecnico2': {'password': 'tec456', 'role': 2, 'name': 'María González'},
    'carlos': {'password': 'cliente123', 'role': 0, 'name': 'Carlos López'},
    'ana': {'password': 'cliente456', 'role': 0, 'name': 'Ana Martínez'}
}

@app.route("/")
def home():
    return render_template("index.html")

@app.route("/celulares")
def celulares():
    return render_template("celulares.html")

@app.route("/consolas")
def consolas():
    return render_template("consolas.html")

@app.route("/pcs")
def pcs():
    return render_template("pcs.html")

# Ruta para manejar el login por AJAX
@app.route('/login', methods=['POST'])
def handle_login():
    data = request.form
    username = data.get('username')
    password = data.get('password')
    
    # Verificar credenciales
    if username in USERS_DB and USERS_DB[username]['password'] == password:
        user_data = USERS_DB[username]
        
        # Guardar en sesión
        session['user_logged_in'] = True
        session['user_id'] = username
        session['user_role'] = user_data['role']
        session['user_name'] = user_data['name']
        
        # Determinar redirección basada en el rol
        if user_data['role'] == 1:  # Admin
            redirect_url = '/admin'
            role_name = 'Administrador'
        elif user_data['role'] == 2:  # Técnico
            redirect_url = '/tecnico'
            role_name = 'Técnico'
        else:  # Cliente (role 0)
            redirect_url = '/cliente'
            role_name = 'Cliente'
        
        return jsonify({
            'success': True, 
            'redirect': redirect_url,
            'role': role_name,
            'user_name': user_data['name']
        })
    
    else:
        return jsonify({'success': False, 'message': 'Credenciales incorrectas'}), 401

# Ruta dinámica que redirige según el rol
@app.route('/dashboard')
def dashboard():
    if not session.get('user_logged_in'):
        return redirect(url_for('home'))
    
    role = session.get('user_role')
    
    if role == 1:  # Admin
        return redirect(url_for('admin_panel'))
    elif role == 2:  # Técnico
        return redirect(url_for('tecnico_panel'))
    elif role == 0:  # Cliente
        return redirect(url_for('cliente_panel'))
    else:
        return redirect(url_for('home'))

# Panel de administrador (solo rol 1)
@app.route('/admin')
def admin_panel():
    if not session.get('user_logged_in') or session.get('user_role') != 1:
        return redirect(url_for('home'))
    
    return render_template('admin.html')

# Panel de técnico (solo rol 2)
@app.route('/tecnico')
def tecnico_panel():
    if not session.get('user_logged_in') or session.get('user_role') != 2:
        return redirect(url_for('home'))
    
    return render_template('tecnico.html')

# Panel de cliente (solo rol 0)
@app.route('/cliente')
def cliente_panel():
    if not session.get('user_logged_in') or session.get('user_role') != 0:
        return redirect(url_for('home'))
    
    return render_template('cliente.html')

@app.route('/logout')
def logout():
    session.clear()
    return redirect(url_for('home'))

if __name__ == "__main__":
    app.run(host="0.0.0.0", port=5000, debug=True)