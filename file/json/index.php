var obj = JSON.parse($response.body);

obj= {

  "messages": [
    ""
  ],
  "data": {
    "account_no": "Hahaha",
    "mobile_no": "+9649999999999",
    "name": "Snap:mr.hamalove",
    "date_of_birth": "1999-01-01",
    "balance": "99999999999999.00",
    "photo": "https://raw.githubusercontent.com/hamaiosdev/web/main/DE39D20F-3D84-478F-958D-1228D7B02F63.jpeg",
    "email_verified": 1,
    "type": "Personal",
    "status": 1,
    "verification_info": {
      "verification_doc_id": "",
      "verification_doc_file": "",
      "status": 3,
      "icon": "https://cdn.fast-pay.cash/icons/verifications/img_3.png",
      "texts": {
        "en": "Upload your ID to get verified",
        "ar": "ارفع بطاقتك الشخصية للتوثيق",
        "ku": "ناسنامەکەت داخڵ بکە، بۆ پەسند کردنی ھەژمارەکەت "
      },
      "redirect_url": "com.fastpaywalletngc://idupdate"
    },
    "permissions": {
      "mobileRecharge": false,
      "onlineCard": false,
      "internetPlan": false
    },
    "referral_code": "kkkkkk",
    "referral_description": "هاوڕێیەک بانگهێشت بکە بۆ فاستپەی، بۆ ئەوی 500 دیناری  عێراقی وەربگری دوای بانگهێشتکردنی هاوڕێیەکەت لەگەڵمان."
  },
  "code": 200
};

$done({body: JSON.stringify(obj)});
