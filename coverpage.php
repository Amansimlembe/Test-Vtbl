<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tea Catalogue Cover Page</title>
    <style>
        body {
            font-family: century Gothic;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .cover-page1 {
            text-align: center;
            margin: 0 auto;
            border: 1px solid black;
            padding: 20px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            margin-bottom: 40px;
        }
        .bordered-div {
            border: 2px solid #000;
            padding: 10px;
            margin-bottom: 20px;
        }
        .logo {
            display: flex;
            justify-content: center;
            align-items: center;
            color: green;
            font-weight: bolder;
            
        }
        .logo img {
            display: inline-block;
            max-height: 40px;
        
        }
        h1 {
            margin: 10px 0;
        }
        h2 {
            margin: 5px 0;
        }
        .order-of-sale {
            margin:30px 0 30px 0 ;
            text-align: center;
        }
        .order-of-sale h1 {
            
            text-decoration: underline;
            text-decoration-thickness: 2px;
        }
        .contact-info {
            text-align: left;
        }
        .table-container1 {
            overflow-x: auto;
            margin: 0;
            padding: 0;
        }
        #cover1table {
            border-collapse: collapse;
            width: 100%;
            border: 2px solid #000; /* Outer border for the table */
        }
       #cover1table th {
            border: 1px solid #000; /* Inner borders for table cells */
            padding: 10px;
            text-align: center;
        }

        #cover1table td {
            border: 1px solid #000; /* Inner borders for table cells */
            padding: 10px;
            text-align: center;
        }
       #cover1table th:first-child, td:first-child {
            border-left: 0;
        }
        #cover1table th:last-child, td:last-child {
            border-right: 0;
        }
        hr {
            margin: 20px 0;
            font-weight: bold;
        }
        .prompt{
            border-top: 2px dashed black;
            border-bottom: 2px dashed black;
            font-weight: bold;
            margin-bottom: 40px;
        }
        .prompt-date {
            font-weight: bold;
        }
        .spacer {
            flex-grow: 1;
        }
    </style>
</head>
<body>
    <section class="cover-page1">
        <div class="bordered-div logo">
            <div><h1> VISION TEA BROKERS LTD </h1></div>
            <span><img src="Vision.logo1.png" ></span>
        </div>
        <div class="bordered-div">
            <h1>AUCTION Sale No. <span id="auctionNoValue1"></span> of <span id="auctionDateValue1"></span></h1>
            <h1>TANZANIA TEAS</h1>
            <h1>FOR SALE BY ONLINE AUCTION</h1>
            <h4>Subject to the DAR ES SALAAM TEA AUCTION RULES AND CONDITIONS of sale exhibited in the TMX Online Platform.</h4>
        </div>
        <div class="table-container1">
            <table id="cover1table">
                <thead>
                    <tr>
                        <th>Region</th>
                        <th>Lots</th>
                        <th>Packages</th>
                        <th>Kgs</th>
                        <th>Reprint Pkgs</th>
                        <th>Reprint Kgs</th>
                        <th>TOTAL PKGS</th>
                        <th>TOTAL KGS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>SOUTHERN HIGHLANDS</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                
                    <tr>
                        <th>TANGA REGION</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>NORTH WEST ZONE</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>TOTALS:</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="order-of-sale">
            <h1>ORDER OF SALE</h1>
            <div>
                <h5>1. VISION TEA BROKERS LTD</h5>
                <h5>2. COHERENT TEA BROKERS LTD</h5>
            </div>
        </div>
        <div class="prompt">
        
            PROMPT DATE: <span id="prompt-date" class="prompt-date"></span>
        
        </div>
        <div class="spacer"></div>
        <div>
            <h1 style="color: green;">VISION TEA BROKERS LTD</h1>
            <p>
                Head Office, IPS Building 5th & 10th Floor Samora Avenue/Azikiwe Street,<br>
                P.O. Box 8680, Dar es Salaam, Tanzania.<br>
                Tel: +255 22 2127537 Mobile: 0754 276123, 0764 674761<br>
                Email: info@visionteabrokers.co.tz<br>
                <a href="http://www.visionteabrokers.co.tz" target="_blank">www.visionteabrokers.co.tz</a>
            </p>
            <hr>
        </div>
    </section>
</body>
</html>
