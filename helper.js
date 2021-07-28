module.exports.generateOrderId = async function ( user_id ){
    let currentDate = new Date()
    let ts_date = currentDate.getDate()
    let ts_month = (currentDate.getMonth()+1)
    let ts_year = currentDate.getFullYear()
    let ts_hour = currentDate.getHours()
    let ts_minutes = currentDate.getMinutes()
    let ts_seconds = currentDate.getSeconds()
    ts_date = ts_date<=9?`0${ts_date}`:ts_date
    ts_month = ts_month<=9?`0${ts_month}`:ts_month
    ts_hour = ts_hour<=9?`0${ts_hour}`:ts_hour
    ts_minutes = ts_minutes<=9?`0${ts_minutes}`:ts_minutes
    ts_seconds = ts_seconds<=9?`0${ts_seconds}`:ts_seconds
    let orderId = user_id.toString()+ts_seconds+ts_minutes+ts_hour+ts_year+ts_month+ts_date
    return orderId
}

module.exports.getTimeStamp = async function ( ts_data){
    let time_stamp = ts_data
    let ts_date = time_stamp.getDate()
    let ts_month = (time_stamp.getMonth()+1)
    let ts_year = time_stamp.getFullYear()
    let ts_hour = time_stamp.getHours()
    let ts_minutes = time_stamp.getMinutes()
    let ts_seconds = time_stamp.getSeconds()
    ts_date = ts_date<=9?`0${ts_date}`:ts_date
    ts_month = ts_month<=9?`0${ts_month}`:ts_month
    ts_hour = ts_hour<=9?`0${ts_hour}`:ts_hour
    ts_minutes = ts_minutes<=9?`0${ts_minutes}`:ts_minutes
    ts_seconds = ts_seconds<=9?`0${ts_seconds}`:ts_seconds
    time_stamp = `${ts_year}-${ts_month}-${ts_date} ${ts_hour}:${ts_minutes}:${ts_seconds}`
    return time_stamp

}