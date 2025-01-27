<?php
/**
 * @alias DataGrid.class
 * @author WilC <wilz04@gmail.com>
 * @since 2008
 * @version 7.4.1
 */

namespace Phalconia\Ui;


class Datagrid {
	
	private array $header;
	private object $body;
	private array $footer;
	private array $attributes;
	
	function __construct(string $id, array $header = [], object $body = NULL, array $footer = []) {
		$this->header = $header;
		$this->body = $body;
		$this->footer = $footer;
		$this->attributes = ["id" => $id];
	}
	
	function getId(): string {
		return $this->attributes["id"];
	}
	
	function setAttribute(string $name, string $value): void {
		$this->attributes[$name] = $value;
	}
	
	function toHTML(): String {
		$table = "<table%s>\n%s</table>\n";
		$thead = "\t<thead>\n%s</thead>\n";
		$tbody = "\t<tbody>\n%s</tbody>\n";
		$tfoot = "\t<tfoot>\n%s</tfoot>\n";
		$tr = "\t\t<tr>\n%s</tr>\n";
		$th = "\t\t\t<th%s>%s</th>\n";
		$td = "\t\t\t<td%s>%s</td>\n";
		
		$table_attrs = "";
		foreach ($this->attributes as $key => $val) {
			$table_attrs.= " $key=\"$val\"";
		}
		
		if (count($this->header) > 0) {
			$cells = "";
			foreach ($this->header as $cell) {
				$cell_attrs = "";
				foreach ($cell as $key => $val) {
					if ($key != "innerHTML") {
						$cell_attrs.= " $key=\"$val\"";
					}
				}
				$cells.= sprintf($th, $cell_attrs, $cell["innerHTML"]);
			}
			$thead = sprintf($thead, sprintf($tr, $cells));
		} else {
			$thead = "";
		}
		
		if (count($this->body) > 0) {
			$rows = "";
			// $i = 0;
			foreach ($this->body as $row) {
				$cells = "";
				foreach ($row as $cell) {
					$cell_attrs = "";
					/* foreach ($cell as $key => $val) {
						if ($key != "innerHTML") {
							$cell_attrs.= " $key=\"$val\"";
						}
					} */
					$cells.= sprintf($td, $cell_attrs, $cell); /* $cell["innerHTML"] */
				}
				// $i++;
				$rows.= sprintf($tr, $cells);
			}
			$tbody = sprintf($tbody, $rows);
		} else {
			$tbody = "";
		}
		
		if (count($this->footer) > 0) {
			$cells = "";
			foreach ($this->footer as $cell) {
				$cell_attrs = "";
				foreach ($cell as $key => $val) {
					if ($key != "innerHTML") {
						$cell_attrs.= " $key=\"$val\"";
					}
				}
				$cells.= sprintf($td, $cell_attrs, $cell["innerHTML"]);
			}
			$tfoot = sprintf($tfoot, sprintf($tr, $cells));
		} else {
			$tfoot = "";
		}
		
		$rows = $thead.$tbody.$tfoot;
		if ($rows != "") {
			return sprintf($table, $table_attrs, $rows);
		} else {
			return "";
		}
	}
	
}
?>
