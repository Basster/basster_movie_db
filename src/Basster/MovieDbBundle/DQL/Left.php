<?php
/**
 * Created by PhpStorm.
 * User: basster
 * Date: 19.11.13
 * Time: 00:59
 */

namespace Basster\MovieDbBundle\DQL;


use Doctrine\ORM\Query\AST\Functions\FunctionNode;
use Doctrine\ORM\Query\Parser;
use Doctrine\ORM\Query\SqlWalker;
use Doctrine\ORM\Query\Lexer;

class Left extends FunctionNode{

    public $value = null;
    public $length = 1;

    public function parse(Parser $parser) {
        $parser->match(Lexer::T_IDENTIFIER);
        $parser->match(Lexer::T_OPEN_PARENTHESIS);
        $this->value = $parser->ArithmeticPrimary();
        $parser->match(Lexer::T_COMMA);
        $this->length = $parser->ArithmeticPrimary();
        $parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }

    public function getSql(SqlWalker $walker) {
        return "LEFT(" . $this->value->dispatch($walker) . ", " . $this->length->dispatch($walker) .")";
    }

} 