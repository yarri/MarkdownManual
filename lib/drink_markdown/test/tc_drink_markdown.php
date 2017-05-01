<?php
class TcDrinkMarkdown extends TcBase{
	function test(){
		$dm = new DrinkMarkdown();
		
		$this->assertEquals('<p>Hello World!</p>',$dm->transform('Hello World!'));
		
		$this->assertEquals('<p>Welcome at <a href="http://www.earth.net">www.earth.net</a>!</p>',$dm->transform('Welcome at www.earth.net!'));

		$this->assertEquals('<p>Contact as on <a href="http://www.earth.net">www.earth.net</a><br />
or <a href="mailto:we@earth.net">we@earth.net</a></p>',$dm->transform("Contact as on www.earth.net  \nor we@earth.net"));


		$this->assertEquals('<h1><center>Title</center></h1>',$dm->transform('# <center>Title</center>'));

		$this->assertEquals("<center>\n\n<p>Centered text block</p>\n\n</center>",$dm->transform("<center>\n\nCentered text block\n\n</center>"));

		// HTML table
		$src = '
Paragraph #1

<table>
	<tr>
		<th>key</th>
		<td>val</td>
	</tr>
</table>

Paragraph #2
		';

		$result = trim('
<p>Paragraph #1</p>

<table class="table table-bordered table-hover">
	<tr>
		<th>key</th>
		<td>val</td>
	</tr>
</table>

<p>Paragraph #2</p>
		');

		$this->assertEquals($result,$dm->transform($src));
	}
}
