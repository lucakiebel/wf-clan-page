#!/bin/bash

curl http://randomtextgenerator.com/ | grep generatedtext > grepped.txt;
preText=`cat grepped.txt | cut -d ">" -f2 `;

echo ${preText:(-140)}

/usr/bin/open -a "/Applications/Google Chrome.app" "https://twitter.com/intent/tweet?text=${preText:(-140)}"


