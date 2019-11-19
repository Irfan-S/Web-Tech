
this.onmessage = function(e)
{
    if(e.data.addThis !== undefined)
    {
        this.console.log("Hiya");
        this.postMessage({result:e.data.addThis.num1 + e.data.addThis.num2});
    }else{
        this.console.log("No info");
    }
};
//     if(event.data.addThis !== undefined)
//     {
//         postMessage({result:event.data.addThis.num1 + event.data.addThis.num2});
//     }
// };
// addEm();
