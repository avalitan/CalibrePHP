<?php
/**
 *  
 *  
 *  @author Avalitan <avalitan@avalitan.com>
 */
namespace Avalitan\CalibrePHP {
	class SearchQueryParser {
		protected $stack = null;
		protected $current = null;
		protected $string = null;
		protected $position = null;
		protected $buffer_start = null;
		protected $quote = FALSE;

		/**
		 *  https://stackoverflow.com/questions/7917161/php-and-nlp-nested-parenthesis-parser-output-to-array/7917979#7917979
		 *  Rewritten by me
		 */
		public function parse($string) {
			if (!$string) {
				return array();
			}
			if ($string[0] == '(') {
				$string = substr($string, 1, -1);
			}
			$this->current = array();
			$this->stack = array();
			$this->string = $string;
			$this->length = strlen($this->string);
			for ($this->position=0; $this->position < $this->length; $this->position++) {
				switch ($this->string[$this->position]) {
					case '(':
						if(!$this->quote) {
							$this->push();
							array_push($this->stack, $this->current);
							$this->current = array();
						}
						break;
					case ')':
						if(!$this->quote) {
							$this->push();
							$t = $this->current;
							$this->current = array_pop($this->stack);
							$this->current[] = $t;
						}
						break;
					case ' ':
						if(!$this->quote) {
							$this->push();
						}
						break;
					case '"':
						$this->quote = ! $this->quote;
						break;
					default:
						if ($this->buffer_start === null) {
							$this->buffer_start = $this->position;
						}
				}
			}
			return $this->current;
		}

		protected function push() {
			if ($this->buffer_start !== null) {
				$buffer = substr($this->string, $this->buffer_start, $this->position - $this->buffer_start);
				$this->buffer_start = null;
				$this->current[] = $buffer;
			}
		}
	}
}

$string = '#licensed:=DCMA AND (tags:"=Magic" OR tags:"=Need Editing" AND (tags:"=Science Fiction" AND tags:"=Science Fiction & Fantasy")) AND (tags:"=Magic" OR tags:"=Need Editing(test)" AND (tags:"=Science Fiction" AND tags:"=Science Fiction & Fantasy"))';
$p = new SearchQueryParser();
$result = $p->parse($string);
echo '<pre>';print_r($result);echo '</pre>';