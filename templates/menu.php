<?


require_once 'config.php';

function generate_menu($array)
{
	foreach ($array as $key => $value) {

		if ($key=="index.php") {
			echo "
			    <li class='nav-item active'>
      				<a class='nav-link' href=\"../$key\">$value <span class='sr-only'>(current)</span></a>
    			</li>
			";
		}else{
            echo "
                    <li class='nav-item'>
                        <a class='nav-link' href='http://bootstrapsite.loc/templates/$key'>$value</a>
                    </li>
        
            ";
	}};
};

generate_menu($array_page);