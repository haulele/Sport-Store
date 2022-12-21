function plus(targetID)
{
    // lấy giá trị của textbox
    var t = document.getElementById(targetID).value;
    //cộng thêm 1 đơn vị rồi gán trở lại cho textbox
    document.getElementById(targetID).value = parseInt(t) + 1;
}
    
function minus(targetID)
{
    // lấy giá trị của textbox
    var t = document.getElementById(targetID).value;
    // Từ đi 1 đơn vị rồi gán trở lại cho textbox
    if(parseInt(t)>1) {
        document.getElementById(targetID).value = parseInt(t) - 1;   
    }
}