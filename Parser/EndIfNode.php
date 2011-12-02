<?php

/*
* This file is part of Spoon Library.
*
* (c) Davy Hellemans <davy@spoon-library.com>
*
* For the full copyright and license information, please view the license
* file that was distributed with this source code.
*/

namespace Spoon\Template\Parser;
use Spoon\Template\TokenStream;
use Spoon\Template\Environment;
use Spoon\Template\Writer;

/**
 * Writes the endif node to the writer.
 *
 * @author Davy Hellemans <davy@spoon-library.com>
 */
class EndIfNode extends Node
{
	/**
	 * Writes the compiled PHP code to the writer object.
	 *
	 * @param Spoon\Template\Writer $writer
	 */
	public function compile(Writer $writer)
	{
		$writer->outdent();
		$writer->write("endif;\n", $this->line);
	}
}
