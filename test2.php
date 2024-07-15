<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tea Catalogue</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Tea Catalogue Generator</h1>
    </header>
    <section id="formSection">
        <form id="teaForm">
            <label for="teaName">Tea Name:</label>
            <input type="text" id="teaName" name="teaName" required>
            
            <label for="teaType">Tea Type:</label>
            <input type="text" id="teaType" name="teaType" required>
            
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" required>
            
            <button type="button" id="addTea">Add Tea</button>
        </form>
    </section>
    <section id="tableSection">
        <table id="teaTable">
            <thead>
                <tr>
                    <th>Tea Name</th>
                    <th>Tea Type</th>
                    <th>Price</th>
                    <th id="action">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dynamic content goes here -->
            </tbody>
        </table>
    </section>
    <footer>
        <button id="backToForm">Back</button>
        <button id="printCatalogue">Print Catalogue</button>
        <button id="exportPDF">Export to PDF</button>
        <button id="exportExcel">Export to Excel</button>
        <button id="exportWord">Export to Word</button>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.19/jspdf.plugin.autotable.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pizzip/3.1.1/pizzip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/docxtemplater/3.26.1/docxtemplater.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
