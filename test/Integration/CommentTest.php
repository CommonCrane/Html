<?php
declare(strict_types=1);

namespace Teein\Html\Test\Integration;

use PHPUnit\Framework\TestCase;
use function Teein\Html\Comment\comment;

class CommentTest extends TestCase
{
    public function testForDelimiters()
    {
        $ast = comment('lorem ipsum');
        $html = $ast->toHtml();
        $this->assertEquals('<!--lorem ipsum-->', $html);
    }
}
