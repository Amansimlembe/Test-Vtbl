// script.js
$(document).ready(function() {
    let editIndex = -1;

    $("#addTea").click(function() {
        let teaName = $("#teaName").val();
        let teaType = $("#teaType").val();
        let price = $("#price").val();

        // Check if price already exists
        let priceExists = false;
        $("#teaTable tbody tr").each(function() {
            let rowPrice = $(this).find("td:eq(2)").text();
            if (rowPrice === price) {
                priceExists = true;
                return false; // Exit each loop early
            }
        });

        if (priceExists) {
            alert("Price already exists. Please enter a different price.");
        } else if (teaName && teaType && price) {
            let newRow = `
                <tr>
                    <td>${teaName}</td>
                    <td>${teaType}</td>
                    <td>${price}</td>
                    <td>
                        <button class="editTea">Edit</button>
                        <button class="deleteTea">Delete</button>
                        <button class="addTeaRow">Add</button>
                    </td>
                </tr>
            `;
            if (editIndex === -1) {
                $("#teaTable tbody").append(newRow);
            } else {
                $("#teaTable tbody tr").eq(editIndex).replaceWith(newRow);
                editIndex = -1;
            }
            $("#teaForm")[0].reset();
        } else {
            alert("Please fill in all fields.");
        }
    });

    // Delete tea entry
    $(document).on("click", ".deleteTea", function() {
        $(this).closest("tr").remove();
    });

    // Edit tea entry
    $(document).on("click", ".editTea", function() {
        let row = $(this).closest("tr");
        let teaName = row.find("td:eq(0)").text();
        let teaType = row.find("td:eq(1)").text();
        let price = row.find("td:eq(2)").text();

        $("#teaName").val(teaName);
        $("#teaType").val(teaType);
        $("#price").val(price);

        editIndex = row.index();
    });

    // Add tea row
    $(document).on("click", ".addTeaRow", function() {
        let newRow = `
            <tr>
                <td><input type="text" class="newTeaName" placeholder="Tea Name"></td>
                <td><input type="text" class="newTeaType" placeholder="Tea Type"></td>
                <td><input type="number" class="newPrice" placeholder="Price"></td>
                <td>
                    <button class="saveNewTea">Save</button>
                    <button class="cancelNewTea">Cancel</button>
                </td>
            </tr>
        `;
        $(this).closest("tr").after(newRow);
    });

    // Save new tea row
    $(document).on("click", ".saveNewTea", function() {
        let row = $(this).closest("tr");
        let teaName = row.find(".newTeaName").val();
        let teaType = row.find(".newTeaType").val();
        let price = row.find(".newPrice").val();

        // Check if price already exists
        let priceExists = false;
        $("#teaTable tbody tr").each(function() {
            let rowPrice = $(this).find("td:eq(2)").text();
            if (rowPrice === price) {
                priceExists = true;
                return false; // Exit each loop early
            }
        });

        if (priceExists) {
            alert("Price already exists. Please enter a different price.");
        } else if (teaName && teaType && price) {
            let newRow = `
                <tr>
                    <td>${teaName}</td>
                    <td>${teaType}</td>
                    <td>${price}</td>
                    <td>
                        <button class="editTea">Edit</button>
                        <button class="deleteTea">Delete</button>
                        <button class="addTeaRow">Add</button>
                    </td>
                </tr>
            `;
            row.replaceWith(newRow);
        } else {
            alert("Please fill in all fields.");
        }
    });

    // Cancel new tea row
    $(document).on("click", ".cancelNewTea", function() {
        $(this).closest("tr").remove();
    });

    // Export to PDF (requires jsPDF library)
    $("#exportPDF").click(function() {
        let doc = new jsPDF();
        let content = $("#teaTable")[0];
        doc.autoTable({ html: content });
        doc.save('tea_catalogue.pdf');
    });

    // Export to Excel (requires SheetJS library)
    $("#exportExcel").click(function() {
        let table = document.getElementById("teaTable");
        let wb = XLSX.utils.table_to_book(table, {sheet: "Sheet JS"});
        let wbout = XLSX.write(wb, {bookType: 'xlsx', type: 'binary'});

        function s2ab(s) {
            let buf = new ArrayBuffer(s.length);
            let view = new Uint8Array(buf);
            for (let i=0; i<s.length; i++) view[i] = s.charCodeAt(i) & 0xFF;
            return buf;
        }

        saveAs(new Blob([s2ab(wbout)],{type:"application/octet-stream"}), 'tea_catalogue.xlsx');
    });

    // Export to Word (requires PizZip and docxtemplater libraries)
    $("#exportWord").click(function() {
        let table = $("#teaTable").clone();
        let tableHtml = $("<div>").append(table).html();

        let zip = new PizZip();
        let doc = new docxtemplater(zip, {paragraphLoop: true, linebreaks: true});

        doc.loadZip(zip);
        doc.setData({tableHtml});

        try {
            doc.render();
        } catch (error) {
            console.error(error);
        }

        let out = doc.getZip().generate({
            type: "blob",
            mimeType: "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
        });

        saveAs(out, "tea_catalogue.docx");
    });

    // Print the catalogue
    $("#printCatalogue").click(function() {
        window.print();
    });
});
