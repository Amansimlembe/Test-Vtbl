$(document).ready(function() {
            function disableInputs() {
                $('#catalogueForm input, #catalogueForm select').prop('disabled', true);
                $('#reset').prop('disabled', false);
            }

            function enableInputs() {
                $('#catalogueForm input, #catalogueForm select').prop('disabled', false);
                $('#reset').prop('disabled', true);
            }

            $('#save').on('click', function(event) {
                event.preventDefault();

                // Disable inputs and enable reset button
                disableInputs();

                // Process your save logic here
                /  //3 call input id for Auction No.
                event.preventDefault();
                const auctionNo = $('#auctionNo').val();
                const auctionNo1 = $('#auctionNo').val();
                const auctionNo2 = $('#auctionNo').val();
                //3call input for closing date
                const closingDate = new Date($('#closingDate').val());
                const auctionDate = new Date(closingDate);
                auctionDate.setDate(closingDate.getDate() + 17);
               


                const promptDate = new Date(auctionDate);
                promptDate.setDate(auctionDate.getDate() + 17);

                //3 through input to span sale No ids
                $('#auctionNoValue').text(auctionNo);
                $('#auctionNoValue1').text(auctionNo1);
                $('#auctionNoValue2').text(auctionNo2);

                //3 through input to span Date ids
                $('#auctionDateValue').text(auctionDate.toISOString().slice(0, 10));
                $('#auctionDateValue1').text(auctionDate.toISOString().slice(0, 10));
                $('#auctionDateValue2').text(auctionDate.toISOString().slice(0, 10));
                $('#prompt-date').text(promptDate.toISOString().slice(0, 10));
       
                // Additional processing logic for adding rows to tables
                // AddRowsToTable function should be implemented as per your requirement

                // Example: Adding rows to table1
                const startLot = parseInt($('#startLot').val());
                const mainLot = parseInt($('#mainLot').val());
                addRowsToTable('table1', startLot, mainLot);

                // Show table2 and add rows if secondaryLot is greater than mainLot
                const secondaryLot = parseInt($('#secondaryLot').val());
                if (secondaryLot > mainLot) {
                    $('#table2').show();
                    addRowsToTable('table2', mainLot + 1, secondaryLot);
                }
            });

            // Function to add rows to a specific table
            function addRowsToTable(tableId, start, end) {
                const tableBody = $(`#${tableId} tbody`);
                for (let i = start; i <= end; i++) {
                    const newRow = `
                        <tr>
                            <td></td>
                            <td>${$('#warehouse').val()}</td>
                            <td></td>
                            <td>${$('#mark').val()}</td>
                            <td>${i}</td>
                            <td>${$('#grade').val()}</td>
                            <td>${$('#manfDate').val()}</td>
                            <td>Non-RA certified</td>
                            <td>${$('#invoice').val()}</td>
                            <td>${$('#noOfPkgs').val()}</td>
                            <td>${$('#types').val()}</td>
                            <td>${$('#netWeight').val()}</td>
                            <td>${$('#noOfPkgs').val() != 0 ? Math.floor($('#netWeight').val() / $('#noOfPkgs').val()) : 0}</td>
                            <td>${$('#nature').val()}</td>
                            <td></td>
                            <td></td>
                        </tr>`;
                    tableBody.append(newRow);
                }
            }

            $('#reset').on('click', function() {
                $('#catalogueForm')[0].reset(); // Reset only the first form
                $('#table1 tbody').empty(); // Clear table1 rows
                $('#table2 tbody').empty(); // Clear table2 rows
                $('#table2').hide(); // Hide table2

                enableInputs(); // Enable inputs again
            });

            enableInputs(); // Ensure inputs are enabled initially
        });