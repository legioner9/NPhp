#!/bin/bash
# use ${arb_} ${sil_} ${ram_} ${ram_to_create}

#! global: ram_name_to_create

# cd ${ram_to_create}/.grot || {
#     plt_exit "EXEC_FAIL: cd file://${ram_to_create}/.grot return 3"
#     return 3
# }

# if is_yes "touch 1.html"; then
#     touch 1.html
# fi
# use ${arb_} ${sil_} ${ram_} ${ram_to_create}
echo -e "${GREEN}\$arb_ = $arb_${NORMAL}" #print variable
echo -e "${GREEN}\$sil_ = $sil_${NORMAL}" #print variable
echo -e "${GREEN}\$ram_ = $ram_${NORMAL}" #print variable
echo -e "${GREEN}\$ram_to_create = $ram_to_create${NORMAL}" #print variable
# read -p "DO?"

# $arb_ = /home/st/REPOBARE/_repo/NPhp/.d/.arb/php_doc.arb
# $sil_ = /home/st/REPOBARE/_repo/plt/.d/.sil.ax/phylum_a.sil
# $ram_ = about.formats.php.html
# $ram_to_create = /home/st/REPOBARE/_repo/NPhp/.d/.arb/php_doc.arb/about.formats.php.html.ram

#!
dir_php_html=${REPO_PATH}/NPhp/.d/.ref.ax/www.php.net/manual/ru

if ! [[ -f ${dir_php_html}/${ram_} ]];then
plt_exit "in ${FNN} : NOT_FILE : 'file://${dir_php_html}/${ram_}' : return 1"
return 1
fi

echo -e "${HLIGHT}--- cp ${dir_php_html}/${ram_} ${ram_to_create}/.grot/.html ---${NORMAL}" #start files
cp ${dir_php_html}/${ram_} ${ram_to_create}/.grot/.html

echo -e "${HLIGHT}--- html2pdf__ ${ram_to_create}/.grot/.html/${ram_} ${ram_to_create}/.grot/.pdf ---${NORMAL}" #start files
html2pdf__ ${ram_to_create}/.grot/.html/${ram_} ${ram_to_create}/.grot/.pdf &>/dev/null
#!



#! global: ram_name_to_create