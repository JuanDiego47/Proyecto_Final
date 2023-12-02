function pdf() {
    var doc = new jsPDF();
    doc.text(20, 20, 'Texto 1.');
    doc.setFont("courier");
    doc.text(20, 30, 'Texto 2');
    doc.save('Test.pdf');
}

var botonPDF = document.getElementById('generarPDF');

// Agregar el manejador de eventos onclick
botonPDF.onclick = function() {
    
    pdf();// Llamar a la función para generar el PDF
};