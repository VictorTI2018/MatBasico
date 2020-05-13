const __ajaxPost = (url, values) => {
    return new Promise((resolve, reject) => {
        $.ajax({
            type: 'POST',
            url: url,
            dataType: 'json',
            data: { ...values },
            success: (resp) => {
                resolve(resp)
            },
            error: (err) => {
                reject(err)
            }
        })
    })
}