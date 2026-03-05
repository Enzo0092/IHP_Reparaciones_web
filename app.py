import os
from flask import Flask, render_template, redirect, url_for, session, request, jsonify
from werkzeug.utils import secure_filename

app = Flask(__name__)
app.secret_key = 'tu_clave_secreta_segura'

# CONFIGURACIÓN DE CARPETA DE SUBIDAS
UPLOAD_FOLDER = os.path.join('static', 'assets', 'img')
app.config['UPLOAD_FOLDER'] = UPLOAD_FOLDER
os.makedirs(app.config['UPLOAD_FOLDER'], exist_ok=True)

ALLOWED_EXTENSIONS = {'png', 'jpg', 'jpeg', 'gif', 'webp'}

def allowed_file(filename):
    return '.' in filename and filename.rsplit('.', 1)[1].lower() in ALLOWED_EXTENSIONS

# ==========================================
# 1. CONFIGURACIÓN GENERAL DEL SITIO
# ==========================================
SITE_CONFIG = {
    'name': 'IHP Reparaciones',
    'logo': 'logo.png',   
    'banner': 'banner.png' 
}

@app.context_processor
def inject_site_config():
    return dict(site_config=SITE_CONFIG)

# ==========================================
# 2. CONTENIDO DINÁMICO DE PÁGINAS (BASE DE DATOS)
# ==========================================
PAGES_CONTENT = {
    'celulares': {
        'title': 'Reparación de Celulares',
        'description': 'Servicio técnico especializado en teléfonos móviles. Diagnóstico real, reparación profesional y repuestos de calidad.',
        'services': [
            {'title': 'Pantallas', 'desc': 'Cambio de módulos, táctiles y vidrios.', 'image': ''},
            {'title': 'Baterías', 'desc': 'Reemplazo de baterías agotadas o defectuosas.', 'image': ''},
            {'title': 'Puertos de carga', 'desc': 'Reparación y cambio de conectores dañados.', 'image': ''}
        ]
    },
    'consolas': {
        'title': 'Reparación de Consolas',
        'description': 'Servicio técnico especializado en consolas de videojuegos. Diagnóstico preciso, reparación profesional y mantenimiento preventivo.',
        'services': [
            {'title': 'PlayStation', 'desc': 'Reparación de PS4 y PS5: limpieza, cambio de HDMI, fuentes, problemas de encendido.', 'image': ''},
            {'title': 'Xbox', 'desc': 'Xbox One y Series: fallas de video, fuentes de poder, mantenimiento y reparación electrónica.', 'image': ''},
            {'title': 'Nintendo', 'desc': 'Nintendo Switch: cambio de pantalla, conector de carga, joy-con drift y mantenimiento general.', 'image': ''}
        ]
    },
    'pcs': {
        'title': 'Computadoras y Notebooks',
        'description': 'Servicio técnico especializado en PC y laptops. Mantenimiento, reparación, upgrades y optimización.',
        'services': [
            {'title': 'Mantenimiento y Limpieza', 'desc': 'Limpieza interna, cambio de pasta térmica y control térmico.', 'image': ''},
            {'title': 'Instalación de Sistemas', 'desc': 'Windows, drivers, software y optimización general.', 'image': ''},
            {'title': 'Upgrades', 'desc': 'SSD, RAM, mejoras de rendimiento y asesoramiento.', 'image': ''}
        ]
    }
}

# Base de datos de usuarios simulada
USERS_DB = {
    'admin': {'password': 'admin', 'role': 1, 'name': 'Administrador Principal'},
    'tecnico1': {'password': 'tec123', 'role': 2, 'name': 'Juan Pérez'},
    'tecnico2': {'password': 'tec456', 'role': 2, 'name': 'María González'},
    'carlos': {'password': 'cliente123', 'role': 0, 'name': 'Carlos López'},
    'ana': {'password': 'cliente456', 'role': 0, 'name': 'Ana Martínez'}
}

# ==========================================
# RUTAS PÚBLICAS
# ==========================================
@app.route("/")
def home():
    return render_template("index.html")

# --- RUTA DINÁMICA: CELULARES ---
@app.route("/celulares")
def celulares():
    content = PAGES_CONTENT.get('celulares', {'title': 'Celulares', 'description': '', 'services': []})
    return render_template("celulares.html", content=content)

# --- RUTA DINÁMICA: CONSOLAS ---
@app.route("/consolas")
def consolas():
    content = PAGES_CONTENT.get('consolas', {'title': 'Consolas', 'description': '', 'services': []})
    return render_template("consolas.html", content=content)

# --- RUTA DINÁMICA: PCS ---
@app.route("/pcs")
def pcs():
    content = PAGES_CONTENT.get('pcs', {'title': 'PCs', 'description': '', 'services': []})
    return render_template("pcs.html", content=content)

# ==========================================
# SISTEMA DE LOGIN
# ==========================================
@app.route('/login', methods=['POST'])
def handle_login():
    data = request.form
    username = data.get('username')
    password = data.get('password')
    
    if username in USERS_DB and USERS_DB[username]['password'] == password:
        user_data = USERS_DB[username]
        session['user_logged_in'] = True
        session['user_id'] = username
        session['user_role'] = user_data['role']
        session['user_name'] = user_data['name']
        
        if user_data['role'] == 1:
            redirect_url = '/admin'
            role_name = 'Administrador'
        elif user_data['role'] == 2:
            redirect_url = '/tecnico'
            role_name = 'Técnico'
        else:
            redirect_url = '/cliente'
            role_name = 'Cliente'
        
        return jsonify({'success': True, 'redirect': redirect_url, 'role': role_name, 'user_name': user_data['name']})
    else:
        return jsonify({'success': False, 'message': 'Credenciales incorrectas'}), 401

@app.route('/dashboard')
def dashboard():
    if not session.get('user_logged_in'): return redirect(url_for('home'))
    role = session.get('user_role')
    if role == 1: return redirect(url_for('admin_panel'))
    elif role == 2: return redirect(url_for('tecnico_panel'))
    elif role == 0: return redirect(url_for('cliente_panel'))
    else: return redirect(url_for('home'))

@app.route('/logout')
def logout():
    session.clear()
    return redirect(url_for('home'))

# ==========================================
# PANELES PRINCIPALES
# ==========================================
@app.route('/admin')
def admin_panel():
    if not session.get('user_logged_in') or session.get('user_role') != 1: return redirect(url_for('home'))
    return render_template('admin.html') 

@app.route('/tecnico')
def tecnico_panel():
    if not session.get('user_logged_in') or session.get('user_role') != 2: return redirect(url_for('home'))
    return render_template('tecnico.html')

@app.route('/cliente')
def cliente_panel():
    if not session.get('user_logged_in') or session.get('user_role') != 0: return redirect(url_for('home'))
    return render_template('cliente.html')

# ==========================================
# RUTAS DE MÓDULOS DE ADMINISTRADOR
# ==========================================

@app.route('/admin/inventario', methods=['GET', 'POST'])
def admin_inventario():
    if not session.get('user_logged_in') or session.get('user_role') != 1: return redirect(url_for('home'))
    if request.method == 'POST':
        print("📦 Datos de Inventario recibidos:", request.form)
        return redirect(url_for('admin_inventario'))
    return render_template('usuarios/admin/inventario.html')

@app.route('/admin/staff', methods=['GET', 'POST'])
def admin_staff():
    if not session.get('user_logged_in') or session.get('user_role') != 1: return redirect(url_for('home'))
    if request.method == 'POST':
        print("👥 Datos de Staff recibidos:", request.form)
        return redirect(url_for('admin_staff'))
    return render_template('usuarios/admin/staff.html')

@app.route('/admin/reportes', methods=['GET', 'POST'])
def admin_reportes():
    if not session.get('user_logged_in') or session.get('user_role') != 1: return redirect(url_for('home'))
    if request.method == 'POST':
        print("📊 Filtros de Reporte recibidos:", request.form)
        return redirect(url_for('admin_reportes'))
    return render_template('usuarios/admin/reportes.html')

@app.route('/admin/crm', methods=['GET', 'POST'])
def admin_crm():
    if not session.get('user_logged_in') or session.get('user_role') != 1: return redirect(url_for('home'))
    if request.method == 'POST':
        action = request.form.get('action_type')
        if action == 'marketing':
            print(f"📢 Campaña: {request.form.get('campaign_title')}")
        elif action == 'save_note':
            print(f"📝 Nota guardada: {request.form.get('internal_note')}")
        elif action == 'add_client':
            print(f"👤 Nuevo Cliente: {request.form.get('new_name')}")
        elif action == 'add_device':
            print(f"📱 Dispositivo agregado: {request.form.get('brand')} {request.form.get('model')}")
        elif action == 'add_repair':
            print(f"🔧 Reparación iniciada: {request.form.get('issue')}")
        return redirect(url_for('admin_crm'))
    return render_template('usuarios/admin/crm.html')

@app.route('/admin/servicios', methods=['GET', 'POST'])
def admin_servicios():
    if not session.get('user_logged_in') or session.get('user_role') != 1: return redirect(url_for('home'))
    if request.method == 'POST':
        action = request.form.get('action_type')
        if action == 'add_service':
            print(f"➕ Servicio: {request.form.get('service_name')}")
        elif action == 'add_category':
            print(f"🏷️ Categoría: {request.form.get('new_category')}")
        elif action == 'update_service':
            print(f"✏️ Servicio Actualizado: {request.form.get('service_name')}")
        return redirect(url_for('admin_servicios'))
    return render_template('usuarios/admin/servicios.html')

# ==========================================
# RUTAS DE CONFIGURACIÓN Y EDICIÓN (ADMIN)
# ==========================================

# 1. Actualizar Configuración General (Nombre, Logo, Banner)
@app.route('/admin/config/update', methods=['POST'])
def update_site_config():
    if not session.get('user_logged_in') or session.get('user_role') != 1:
        return redirect(url_for('home'))

    # Actualizar Nombre
    new_name = request.form.get('site_name')
    if new_name:
        SITE_CONFIG['name'] = new_name

    # Actualizar Logo
    if 'site_logo' in request.files:
        file = request.files['site_logo']
        if file and file.filename != '' and allowed_file(file.filename):
            filename = secure_filename(file.filename)
            save_path = os.path.join(app.config['UPLOAD_FOLDER'], filename)
            file.save(save_path)
            SITE_CONFIG['logo'] = filename

    # Actualizar Banner
    if 'site_banner' in request.files:
        file = request.files['site_banner']
        if file and file.filename != '' and allowed_file(file.filename):
            filename = secure_filename(file.filename)
            save_path = os.path.join(app.config['UPLOAD_FOLDER'], filename)
            file.save(save_path)
            SITE_CONFIG['banner'] = filename

    return redirect(request.referrer or url_for('admin_panel'))

# 2. Actualizar Contenido de Páginas (Texto, Servicios E IMÁGENES)
@app.route('/admin/edit_page/<page_name>', methods=['POST'])
def edit_page_content(page_name):
    if not session.get('user_logged_in') or session.get('user_role') != 1:
        return redirect(url_for('home'))

    if page_name in PAGES_CONTENT:
        # Actualizar Info Principal
        PAGES_CONTENT[page_name]['title'] = request.form.get('page_title')
        PAGES_CONTENT[page_name]['description'] = request.form.get('page_desc')

        # Reconstruir lista de servicios desde el formulario
        titles = request.form.getlist('service_title[]')
        descs = request.form.getlist('service_desc[]')
        
        # Obtener imágenes (archivos y nombres actuales)
        images = request.files.getlist('service_image[]')
        current_images = request.form.getlist('service_current_image[]')
        
        new_services = []
        
        # Iteramos simultáneamente sobre los datos recibidos
        for t, d, file, current_img in zip(titles, descs, images, current_images):
            if t.strip(): # Solo guardar si tiene título
                
                image_filename = current_img # Por defecto mantenemos la imagen actual
                
                # Si se subió una imagen nueva válida, la guardamos
                if file and file.filename != '' and allowed_file(file.filename):
                    filename = secure_filename(file.filename)
                    save_path = os.path.join(app.config['UPLOAD_FOLDER'], filename)
                    file.save(save_path)
                    image_filename = filename
                
                new_services.append({
                    'title': t, 
                    'desc': d, 
                    'image': image_filename
                })
        
        PAGES_CONTENT[page_name]['services'] = new_services

    return redirect(request.referrer)

# ==========================================
# INICIO DE LA APLICACIÓN
# ==========================================
if __name__ == "__main__":
    app.run(host="0.0.0.0", port=5000, debug=True)