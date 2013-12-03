<?php
class TreeViewHelper extends AppHelper {
    
    function createListTree($tree,$href=NULL){
		
		if(!$href) $href=$this->base.'/';
		else $href=$this->base."/$href";
        $out = '';    
        $depth = 0;
        $prev_depth = 0;
        $count = 0;
		
        foreach ($tree as $id => $node) {
            $depth = strrpos($node, '_');
            if ($depth === false){
                $depth = 0;
                $clean_node = $node;
            }else{
                $depth++;
                $clean_node = substr($node, strrpos($node, '_')+1);
            }
            if ($depth > $prev_depth) {
                $out .= "\n<ul>\n";
            } else if ($depth < $prev_depth) {
                for ($i = 0; $i < ($prev_depth-$depth); $i++) $out .= "</li></ul>\n";
            } else if ($count>0) $out .= "\n</li>\n";
            $out .= '<li class="node_'.$id.'"><a href="'.$href.$id.'">'.$clean_node.'</a>';
            $out .= "\n";
            $prev_depth = $depth;
            $count++;
        }
        for ($i = 0; $i < ($depth); $i++) $out .= "</li>\n</ul>\n";
        if (!empty($tree)) $out .= '</li>';
        return $out;
    }
}