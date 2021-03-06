<!DOCTYPE html>
<html>
    
<head>
    <style>
        * { margin: 0; padding: 0; }
        body { font: 16px/1.4 Georgia, serif; }
        h5 {
            font-size: 16pt;
        }
        table { border-collapse: collapse; }
        table td, table th { padding: 10px; }
        td {
            font-size: 12pt;
        }
        th {
            font-size: 12pt;
            color: #fff;
            background-color: #363636;
        }
        .border-top {
             border-top: 2px solid #363636;
        }
        .border-right {
            border-right: 2px solid #363636;
        }
        .border-bottom {
            border-bottom: 2px solid #363636;
        }
        .border-left {
            border-left: 2px solid #363636;
        }
        .customer-title {
            font-size: 16px;
        }
        .highlight {
            background-color: #cccccc;
        }
    </style>
</head>

<body>
    <div id='page-wrap'>

        <textarea id='header'>INVOICE</textarea>

        <table id='identity'>
            
            <div style="height: 10px; background-color: #fff;"></div>
            <div style="height: 1px; background-color: #363636;"></div>
            <div style="height: 10px; background-color: #fff;"></div>

            <tr id='address'>
                <td class="col-left" width="260">Chris Coyier</td>
                <td align="right" width="110">Invoice #:</td>
                <td width="140">000123</td>
            </tr>
            <tr>
                <td class="col-left">123 Appleseed Street</td>
                <td align="right">Date:</td>
                <td><div id='date'>December 15, 2009</div></td>
            </tr>
            <tr>
                <td class="col-left">Appleville, WI 53719</td>
                <td align="right" class="border-bottom">Amount Due:</td>
                <td class="border-bottom">$875.00</td>
            </tr>
            <tr>
                <td class="col-left"></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="col-left">Phone: (904)521-2357</td>
                <td></td>
                <td></td>
            </tr>

        </table>

        <div style='clear:both'></div>

        <div id='customer'>

            <div class="customer-title">UF Pathology<br />
                                     Dr. Rivera-Zengotita
            </div>

        </div>

        <table id='items'>

          <tr>
              <th width="100">Item</th>
              <th width="160">Description</th>
              <th width="80">Unit Cost</th>
              <th width="90">Quantity</th>
              <th width="80">Price</th>
          </tr>
          <tr class='item-row'>
              <td>Item 1</td>
              <td class='description'>Monthly web updates for http://widgetcorp.com (Nov. 1 - Nov. 30, 2009)</td>
              <td>$650.00</td>
              <td>1</td>
              <td>$650.00</td>
          </tr>
          <tr class='item-row'>
              <td>Item 2</td>
              <td class='description'><textarea>Yearly renewals of SSL certificates on main domain and several subdomains</textarea></td>
              <td>$75.00</td>
              <td>3</td>
              <td>$225.00</td>
          </tr>
          <tr>
              <td class="border-top"></td>
              <td class="border-top"></td>
              <td class="border-top"></td>
              <td class="border-top"></td>
              <td class="border-top"></td>
          </tr>
          <tr>
              <td></td>
              <td></td>
              <td></td>
              <td align="right" class="border-top border-left">Subtotal:</td>
              <td class="border-top border-right">$875.00</td>
          </tr>
          <tr>
              <td></td>
              <td></td>
              <td></td>
              <td align="right" class="border-left">Total:</td>
              <td class="border-right">$875.00</td>
          </tr>
          <tr>
              <td></td>
              <td></td>
              <td></td>
              <td align="right" class="border-left">Amount Paid:</td>
              <td class="border-right">$0.00</td>
          </tr>
          <tr>
              <td></td>
              <td></td>
              <td></td>
              <td align="right" class="border-top border-bottom border-left highlight">Balance Due:</td>
              <td class="border-top border-right border-bottom highlight">$875.00</td>
          </tr>

        </table>

        <div id='terms'>
          <h5>Terms</h5>
          <p>Services will not be completed until balance due is paid in full.</p>
        </div>

    </div>
</body>
    
</html>