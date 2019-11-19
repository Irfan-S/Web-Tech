var i=0;
function countNums(){
    if(i<1000000){
        i++;
        postMessage(i);
    }
    setInterval("countNums()",500);
}
countNums();