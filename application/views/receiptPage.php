<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Your Receipt</title>
    
    <style>
    .invoice-box{
        max-width:800px;
        margin:auto;
        padding:30px;
        border:1px solid #eee;
        box-shadow:0 0 10px rgba(0, 0, 0, .15);
        font-size:16px;
        line-height:24px;
        font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color:#555;
    }
    
    .invoice-box table{
        width:100%;
        line-height:inherit;
        text-align:left;
    }
    
    .invoice-box table td{
        padding:5px;
        vertical-align:top;
    }
    
    .invoice-box table tr td:nth-child(2){
        text-align:right;
    }
    
    .invoice-box table tr.top table td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.top table td.title{
        font-size:45px;
        line-height:45px;
        color:#333;
    }
    
    .invoice-box table tr.information table td{
        padding-bottom:40px;
    }
    
    .invoice-box table tr.heading td{
        background:#eee;
        border-bottom:1px solid #ddd;
        font-weight:bold;
    }
    
    .invoice-box table tr.details td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom:1px solid #eee;
    }
    
    .invoice-box table tr.item.last td{
        border-bottom:none;
    }
    
    .invoice-box table tr.total td:nth-child(2){
        border-top:2px solid #eee;
        font-weight:bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td{
            width:100%;
            display:block;
            text-align:center;
        }
        
        .invoice-box table tr.information table td{
            width:100%;
            display:block;
            text-align:center;
        }
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="<?php echo base_url('assets/images/cyto_logo_orgdark_sharp_noalpha.png'); ?>" style="width:100%; max-width:90px;">
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr id='address'>
                <td class='col-left' width='260'>CytoInformatics</td>
                <td align='right' width='110'>Receipt #:</td>
                <td width='140'> <?php echo $transId ?></td>
            </tr>
            <tr>
                <td class='col-left'>105 Haynes Circle</td>
                <td align='right'>Date:</td>
                <td><div id='date'><?php echo $TranDate ?></div></td>
            </tr>
            <tr>
                <td class='col-left'>Nicholasville, KY, 40356</td>
                <td align='right' class='border-bottom'></td>
                <td class='border-bottom'></td>
            </tr>
            <tr>
                <td class='col-left'></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class='col-left'>Phone: (904)521-2357</td>
                <td></td>
                <td></td>
            </tr>

            
            <tr class="heading">
                <td>
                    Payment Method
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                
                <td>
                    Check #
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    Account Number : 
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                
                <td>
                    <?php echo $accountNumber; ?>
                </td>
            </tr>

            <tr class="details">
                <td>
                    Account Type : 
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                
                <td>
                    <?php echo $accountType; ?>
                </td>
            </tr>

            <tr class="details">
                <td>
                    Transaction ID : 
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                
                <td>
                    <?php echo $transId; ?>
                </td>
            </tr>

            <tr class="details">
                <td>
                    Transaction Date : 
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                
                <td>
                    <?php echo $TranDate; ?>
                </td>
            </tr>

            <!-- for loop items  -->
            <tr class="heading">
                <td>
                    Item
                </td>
                
                <td>
                    Description
                </td>

                <td>
                    Unit Cost
                </td>
                
                <td>
                    Quantity
                </td>

                <td>
                    Price
                </td>
            </tr>

             <?php 
                $items = '';
                foreach ($quoteIds as $key => $value) {
                        $items = $items."<tr class='item'>
                                <td>".$value."</td>
                                <td class='description'>Monthly web</td>
                                <td>".$quoteCharges[$key]."</td>
                                <td>1</td>
                                <td>".$quoteCharges[$key]."</td>
                            </tr>";
                }; 
                echo $items;
            ?>

            <!-- billing address -->
            <tr class="heading">
                <td>
                    Billing Info
                </td>

                <td>
                    
                </td>

                <td>
                    
                </td>
                
                <td>
                    
                </td>

                <td>
                    
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Billing Email : 
                </td>

                <td>
                    
                </td>

                <td>
                    
                </td>

                <td>
                    
                </td>
                
                <td>
                    <?php echo $billEmail; ?>
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Street Address :
                </td>

                <td>
                    
                </td>

                <td>
                    
                </td>

                <td>
                    
                </td>
                
                <td>
                   <?php echo $streetAddress; ?>
                </td>
            </tr>

            <tr class="item">
                <td>
                    City :
                </td>

                <td>
                    
                </td>

                <td>
                    
                </td>

                <td>
                    
                </td>
                
                <td>
                   <?php echo $city; ?>
                </td>
            </tr>

            <tr class="item">
                <td>
                    Country :
                </td>

                <td>
                    
                </td>

                <td>
                    
                </td>

                <td>
                    
                </td>
                
                <td>
                   <?php echo $country; ?>
                </td>
            </tr>

            <tr class="item last">
                <td>
                    Zipcode :
                </td>
                <td>
                    
                </td >
                <td>
                    
                </td>
                <td>
                    
                </td>
                <td>
                   <?php echo $zipCode;?>
                </td>
            </tr>            

            <tr >
                <td>
                    
                </td>

                <td>
                    
                </td>

                <td>
                    
                </td>

                <td>
                    
                </td>
                
                <td style="border-top: 2px solid #eee;">
                   Total: $<?php echo $amount ?>
                </td>
            </tr>
        </table>

        <button onclick="returnback()"> Back to Home Page </button>

    </div>

    <script type="text/javascript">     
    function returnback(){
        window.location.href = 'https://localhost/Codeigniter/index.php/Cyto/index';
    }
    </script>
</body>
</html>