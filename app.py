from flask import Flask, render_template, redirect, url_for, session, request, jsonify

app = Flask(__name__)
app.secret_key = 'tu_clave_secreta_segura'

# Base de datos mock (solo para pruebas)
USERS_DB = {
    'admin': {'password': 'admin', 'role': 1, 'name': 'Administrador Principal'},
    'tecnico1': {'password': 'tec123', 'role': 2, 'name': 'Juan Pérez'},
    'tecnico2': {'password': 'tec456', 'role': 2, 'name': 'María González'},
    'carlos': {'password': 'cliente123', 'role': 0, 'name': 'Carlos López'},
    'ana': {'password': 'cliente456', 'role': 0, 'name': 'Ana Martínez'}
}

# ======================
# RUTAS PÚBLICAS
# ======================

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

# ======================
# LOGIN
# ======================

@app.route('/login', methods=['POST'])
def handle_login():
    username = request.form.get('username')
    password = request.form.get('password')

    if username in USERS_DB and USERS_DB[username]['password'] == password:
        user = USERS_DB[username]

        session['user_logged_in'] = True
        session['user_id'] = username
        session['user_role'] = user['role']
        session['user_name'] = user['name']

        if user['role'] == 1:
            redirect_url = '/admin'
        elif user['role'] == 2:
            redirect_url = '/tecnico'
        else:
            redirect_url = '/cliente'

        return jsonify(success=True, redirect=redirect_url)

    return jsonify(success=False, message='Credenciales incorrectas'), 401

# ======================
# PANELES
# ======================

@app.route('/admin')
def admin_panel():
    if not session.get('user_logged_in') or session.get('user_role') != 1:
        return redirect(url_for('home'))
    return render_template('admin.html')

@app.route('/tecnico')
def tecnico_panel():
    if not session.get('user_logged_in') or session.get('user_role') != 2:
        return redirect(url_for('home'))
    return render_template('tecnico.html')

@app.route('/cliente')
def cliente_panel():
    if not session.get('user_logged_in') or session.get('user_role') != 0:
        return redirect(url_for('home'))
    return render_template('cliente.html')

# ======================
# LOGOUT
# ======================

@app.route('/logout')
def logout():
    session.clear()
    return redirect(url_for('home'))

# ======================
# RUN
# ======================

if __name__ == "__main__":
    app.run(debug=True)
