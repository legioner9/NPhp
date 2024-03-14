<?

// You do need global in this special situation
function get_var($varname)
{
    global $$varname;
    echo "That $$varname:\n";
    var_dump($$varname);
}

get_var('_FILES');
