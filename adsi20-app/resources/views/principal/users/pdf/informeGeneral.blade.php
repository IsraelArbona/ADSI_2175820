<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 1</title>
    <link rel="stylesheet" href="{{ asset('/css/style_pdf.css') }}" media="all" />

    <link rel="stylesheet" href="https://cdn.rawgit.com/theus/chart.css/v1.0.0/dist/chart.css" />

  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="{{ asset('/img/logo.png') }}">
      </div>
      <h1>INVOICE 3-2-1</h1>
      <div id="company" class="clearfix">
        <div>Company Name</div>
        <div>455 Foggy Heights,<br /> AZ 85004, US</div>
        <div>(602) 519-0450</div>
        <div><a href="mailto:company@example.com">company@example.com</a></div>
      </div>
      <div id="project">
        <div><span>PROJECT</span> Website development</div>
        <div><span>CLIENT</span> John Doe</div>
        <div><span>ADDRESS</span> 796 Silver Harbour, TX 79273, US</div>
        <div><span>EMAIL</span> <a href="mailto:john@example.com">john@example.com</a></div>
        <div><span>DATE</span> August 17, 2015</div>
        <div><span>DUE DATE</span> September 17, 2015</div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">SERVICE</th>
            <th class="desc">DESCRIPTION</th>
            <th>PRICE</th>
            <th>QTY</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="service">Design</td>
            <td class="desc">Creating a recognizable design solution based on the company's existing visual identity</td>
            <td class="unit">$40.00</td>
            <td class="qty">26</td>
            <td class="total">$1,040.00</td>
          </tr>
          <tr>
            <td class="service">Development</td>
            <td class="desc">Developing a Content Management System-based Website</td>
            <td class="unit">$40.00</td>
            <td class="qty">80</td>
            <td class="total">$3,200.00</td>
          </tr>
          <tr>
            <td class="service">SEO</td>
            <td class="desc">Optimize the site for search engines (SEO)</td>
            <td class="unit">$40.00</td>
            <td class="qty">20</td>
            <td class="total">$800.00</td>
          </tr>
          <tr>
            <td class="service">Training</td>
            <td class="desc">Initial training sessions for staff responsible for uploading web content</td>
            <td class="unit">$40.00</td>
            <td class="qty">4</td>
            <td class="total">$160.00</td>
          </tr>
          <tr>
            <td colspan="4">SUBTOTAL</td>
            <td class="total">$5,200.00</td>
          </tr>
          <tr>
            <td colspan="4">TAX 25%</td>
            <td class="total">$1,300.00</td>
          </tr>
          <tr>
            <td colspan="4" class="grand total">GRAND TOTAL</td>
            <td class="grand total">$6,500.00</td>
          </tr>
        </tbody>
      </table>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
    </main>



        


<!--
<div class="chart-wrap horizontal" style="height:150px; width:150px;"> 
  <div class="title">Grafico con HTML y CSS que se puede visualizar horizontal o vertical</div>
 
  <div class="grid">
      <div class="bar" style="--bar-value:300%;" data-name="300"></div>
      <div class="bar" style="--bar-value:14%;" data-name="Medium"></div>
      <div class="bar" style="--bar-value:7%;" data-name="Tumblr"></div>
      <div class="bar" style="--bar-value:38%;" data-name="Facebook"></div>
      <div class="bar" style="--bar-value:25%;" data-name="YouTube"></div>
      <div class="bar" style="--bar-value:4%;" data-name="LinkedIn" title="LinkedIn 30"></div>
      
  </div>
</div>


<div id="vertgraph">
    <ul>
        <li class="critical" style="height: 150px;">22</li>
        <li class="high" style="height: 80px;">7</li>
        <li class="medium" style="height: 50px;">3</li>
        <li class="low" style="height: 90px;">8</li>
        <li class="info" style="height: 40px;">2</li>
    </ul>
</div>

-->
<!--
<div class="charts charts--vertical" style="height:150px; width:400px;">

  <div class="charts__chart">
    <span class="charts__percent"></span>
  </div>

  <div class="charts__chart chart--p200">
    <span class="charts__percent"></span>
  </div>

  <div class="charts__chart chart--p10">
    <span class="charts__percent"></span>
  </div>

  <div class="charts__chart chart--p9                chart--hover">
    <span class="charts__percent"></span>
  </div>

  <div class="charts__chart chart--p14  chart--blue    chart--hover">
    <span class="charts__percent"></span>
  </div>

  <div class="charts__chart chart--p14  chart--green   chart--hover">
    <span class="charts__percent"></span>
  </div>
</div>

-->



<div style="height:100px; width:200px;">
<table align="center" cellpadding="0" cellspacing="0" border="0">
  <tbody align="center">
    <tr>
    <td valign="bottom"><div style="vertical-align:text-top">25</div><div class="barrasv" style="height:31.6px; background-color:#BDDA4C">&nbsp;</div></td>
    <td valign="bottom"><div style="vertical-align:text-top">40</div><div class="barrasv" style="height:43.5px; background-color:#FF9A68">&nbsp;</div></td>
    <td valign="bottom"><div style="vertical-align:text-top">15</div><div class="barrasv" style="height:15.8px; background-color:#69ABBF">&nbsp;</div></td>
    <td valign="bottom"><div style="vertical-align:text-top">2</div><div class="barrasv" style="height:1.9px; background-color:#FFDE68">&nbsp;</div></td>
    <td valign="bottom"><div style="vertical-align:text-top">7</div><div class="barrasv" style="height:6.9px; background-color:#AB6487">&nbsp;</div></td>
    </tr>
    <tr>
    <td class="bordetd">31.6%</td>
    <td class="bordetd">43.5%</td>
    <td class="bordetd">15.8%</td>
    <td class="bordetd">1.9%</td>
    <td class="bordetd">6.9%</td>
    </tr>
    <tr id="etiq">
    <td><div class="verticalmente">ENE</div></td>
    <td><div class="verticalmente">FEB</div></td>
    <td><div class="verticalmente">MAR</div></td>
    <td><div class="verticalmente">ABR</div></td>
    <td><div class="verticalmente">MAY</div></td>
    </tr>
  </tbody>
</table>
</div>


    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>