<!DOCTYPE html>
<html>
    <head>
        <title>
            list
        </title>
    </head>
    <body>
        <p>
            <dl>
                <dt>Gopi</dt>
                <dd>this is a name of person</dd>
                <dt>krishnan</dt>
                <dd>this also a person name</dd>
                <dt>hey</dt>
                <dd>this is  a english word</dd>
                <dt>hello</dt>
                <dd>this means in tamil was vanakkam</dd>
            </dl>
            <hr>
        </p>
        <p>
            <h1>nested list</h1>
            <ul>
            <li><a href=#>Home</a></li>
            <li><a href=#>About</a>
                <ul>
                    <li><a href="#">Our Company</a></li>
                    <li><a href="#">Our Mission</a></li>
                    <li><a href="#">Our Team</a></li>
                </ul>
            </li>
            <li><a href=#>Services</a>
                <ul>
                    <li><a href="#">Our x</a></li>
                    <li><a href="#">Our y</a></li>
                    <li><a href="#">Our z</a></li></li>
                </ul>
            <li><a href=#>Technologies</a></li>
            <li><a href=#>Contact</a></li>
            </ul>
            <hr>
        </p>
            <h1>Table in html</h1>
            <table border="3">
                <tr>
                    <th rowspan="2">Day</th>
                    <th colspan="11">Time</th>
                </tr>
                <tr> 
                    <th><a href="https://www.w3schools.com/tags/ref_byfunc.asp" target="_blank">9:00 - 9:45</a></th>
                    <th>9:45 - 10:30</th>
                    <th rowspan="7">Recess</th>
                    <th>10:45 - 11:30</th>
                    <th>11:30 - 12:15</th>
                    <th rowspan="7">Lunch</th>
                    <th>1:15 - 2:00</th>
                    <th>2:00 - 2:45</th>
                    <th rowspan="7">Recess</th>
                    <th>3:00 - 3:45</th>
                    <th>3:45 - 4:30</th>
                </tr>
                <tr>
                    <th>Monday</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Tuseday</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Wednesday</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Thursday</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Friday</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Saturday</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <hr>
            <h1>Invoice Table</h1>
            <table border="3">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Description</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for($i=0;$i<10;$i++){
                    ?>
                    <tr>
                    <td>1</td>
                    <td>soap</td>
                    <td>35.00</td>
                    <td>2</td>
                    <td>70</td>
                    </tr>
                    <?php
                     };
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="4">GST</th>
                        <td rowspan="2">2000.00</td>
                    </tr>
                    <tr>
                        <th colspan="4">Grand Total</th>
                    </tr>
                </tfoot>
            </table>
            <hr>
    </body>
</html>