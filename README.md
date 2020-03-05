# Project-02_02_01

Part 01
1. Create a new file called ConditionalScript.php. Scaffold a basic HTML
code layout into it. Set the &lt;title&gt; to Conditional Script. Make sure
to have the modernizr &lt;script&gt; linked in. Perform a server/browser
test.

2. Add an &lt;h2&gt; element to the body with the content set to
Conditional Script. Place a set of PHP standard script delimiters in
the &lt;body&gt; of the document.

3. Add the following code, containing a conditional statement, to the
script:
&lt;?php
$intVariable = 75;
$result = &quot;&quot;;
($intVariable &gt; 100) ? $result = &#39;$intVariable is greater than
100&#39; :
$result = &#39;$intVariable is less than or equal to 100&#39;;
echo &#39;&lt;h3&gt;$result: &#39; . &quot;$result&lt;/h3&gt;&quot;;
?&gt;
Do a server and browser test on this, changing the value of
$intVariable for testing.

4. Replace the conditional statement with an if…else structure. Do a
server and browser test on this, changing the value of $intVariable
for testing.

Part 02
1. Create a new file called OddNumbers.php. Scaffold a basic HTML
code layout into it. Set the &lt;title&gt; to Odd Numbers. Make sure to
have the modernizr &lt;script&gt; linked in. Perform a server/browser
test.

2. Add an &lt;h2&gt; element to the body with the content set to Odd
Numbers. Place a set of PHP standard script delimiters in the
&lt;body&gt; of the document.

3. Write a script that displays all of the odd numbers between 1 and 100
using a while loop.

Part 03
1. Create a new file called WhileLogic.php. Scaffold a basic HTML code
layout into it. Set the &lt;title&gt; to Is Even. Make sure to have the
modernizr &lt;script&gt; linked in. Perform a server/browser test.

2. Add an &lt;h2&gt; element to the body with the content set to While
Logic. Place a set of PHP standard script delimiters in the &lt;body&gt; of
the document.

3. Add the following code, containing a while loop and a foreach loop,
to the script. The code should fill the array with the numbers 1 through
100, then display them on the page. It contains several logic flaws
which you must fix:
&lt;?php
$counter = 0;
while ($counter &gt; 100) {
$numbers[] = $counter;
++$counter;
}
foreach ($count as $currentNum) {
echo &quot;$currentNum&lt;br&gt;&quot;;
}
?&gt;
Do a server and browser test on this, and there should be an error.
4. Fix the script and retest.
Part 04

1. Create a new file called GasPrices.php. Scaffold a basic HTML code
layout into it. Set the &lt;title&gt; to Gas Prices. Make sure to have the
modernizr &lt;script&gt; linked in. Perform a server/browser test.

2. Add an &lt;h2&gt; element to the body with the content set to Gas Prices.
Place a set of PHP standard script delimiters in the &lt;body&gt; of the
document.

3. Add the following code, containing a variable declaration and nested if
statements, to the script:
&lt;?php
$gasPrice = 2.57;
if ($gasPrice &gt;= 2) {
if ($gasPrice &lt;= 3) {
echo &quot;&lt;p&gt;Gas prices are between $2.00 and
$3.00.&lt;/p&gt;&quot;;
  }
}
Do a server and browser test on this, and there should be good
output. Test for multiple values of $gasPrice.

4. Convert the previous nested if statement into a single if statement
which uses logical operators. Test for multiple values of $gasPrice.

5. Add an else statement which displays Gas prices are not between
$2.00 and $3.00. Test for multiple values of $gasPrice.
Part 05
1. Create a new file called CoastCityComputers.php. Scaffold a basic
HTML code layout into it. Set the &lt;title&gt; to Coast City Computers.
Make sure to have the modernizr &lt;script&gt; linked in. Perform a
server/browser test.

2. Add the following HTML code to the document &lt;body&gt;
&lt;h2&gt;Memorial Day Sale&lt;/h2&gt;
&lt;ul&gt;
&lt;li&gt;Compaq Presario m2007us Notebook:
&lt;strong&gt;$799.99&lt;/strong&gt;&lt;/li&gt;
&lt;li&gt;Epson Stylus CX6600 Color All-In-One Printer,
Print/Copy/Scan:&lt;strong&gt;$699.99&lt;/strong&gt;&lt;/li&gt;
&lt;li&gt;Proview Technology Inc. KDS K715s 17-inch LCD
Monitor, Silver/Black:&lt;strong&gt;$199.99&lt;/strong&gt;&lt;/li&gt;
&lt;li&gt;Hawking Technology Hi-Speed Wireless-AC Cardbus
Card:&lt;strong&gt;$9.99&lt;/strong&gt;&lt;/li&gt;
&lt;/ul&gt;
Do a server and browser test on this, and there should be good
output.

3. Create a new file called inc_header.php. Do not scaffold any basic
HTML template items into it. Just add the following HTML snippet:
&lt;h1&gt;Coast City Computers&lt;/h1&gt;
&lt;strong&gt;Buy Online or Call 1-800-555-1212&lt;/strong&gt;
&lt;hr&gt;

4. Add the following PHP script to the beginning of the document
&lt;body&gt; in CoastCityComputers.php:
&lt;body&gt;
&lt;?php include(&quot;inc_header.php&quot;); ?&gt;
Do a server and browser test on this, and there should be good
output.

5. Create a new file called inc_footer.php. Do not scaffold any basic
HTML template items into it. Just add the following HTML snippet:
&lt;hr&gt;
&lt;strong&gt;Updated&lt;/strong&gt;&amp;nbsp;06 January, 2017&lt;br&gt;
&amp;copy; 2017 by Coast City Computers&lt;br&gt;
All Rights Reserved.

6. Add the following PHP script to the end of the document &lt;body&gt; in
CoastCityComputers.php:
&lt;?php include(&quot;inc_footer.php&quot;); ?&gt;
&lt;/body&gt;
Do a server and browser test on this, and there should be good
output.

Part 06
1. Create a new file called TempConversion.php. Scaffold a basic HTML
code layout into it. Set the &lt;title&gt; and make sure to have the
modernizr &lt;script&gt; linked in. Perform a server/browser test. Add a
nice heading element to the &lt;&gt;body.

2. Write a script that displays a list of the Celsius equivalents of zero
degrees Fahrenheit through 100 degrees Fahrenheit. Display both of
the temperatures side by side. To convert Fahrenheit to Celsius,
subtract 32 from the Fahrenheit temperature, and then multiply the
remainder by (5/9).
