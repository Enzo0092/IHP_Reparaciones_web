// Login Modal Functionality
document.addEventListener('DOMContentLoaded', function() {
  // Verificar si el usuario ya está logueado
  if (sessionStorage.getItem('adminLoggedIn') === 'true') {
    const adminPanel = document.getElementById('adminPanel');
    if (adminPanel) {
      adminPanel.style.display = 'block';
    }
  }
  
  // Inicializar botón de logout si existe
  const logoutBtn = document.getElementById('logoutBtn');
  if (logoutBtn) {
    logoutBtn.addEventListener('click', function() {
      sessionStorage.removeItem('adminLoggedIn');
      const adminPanel = document.getElementById('adminPanel');
      if (adminPanel) {
        adminPanel.style.display = 'none';
      }
      showNotification('✅ Sesión cerrada correctamente', 'success');
    });
  }
  
  // Función para mostrar notificaciones
  window.showNotification = function(message, type) {
    const notification = document.createElement('div');
    notification.textContent = message;
    notification.className = 'notification';
    notification.style.cssText = `
      position: fixed;
      top: 20px;
      right: 20px;
      background: ${type === 'success' ? 'var(--granate)' : '#ff6b6b'};
      color: white;
      padding: 15px 25px;
      border-radius: 8px;
      border-left: 5px solid var(--dorado);
      z-index: 4000;
      box-shadow: 0 5px 15px rgba(0,0,0,0.3);
      animation: slideInRight 0.3s ease;
    `;
    document.body.appendChild(notification);
    
    setTimeout(() => {
      notification.remove();
    }, 3000);
  };
});