import requests
import telebot
import re
import random

cg=None
ch = None
H= None
response=None
response1=None
pic =None
token="767838538:AAGibNIboerdyPRpm_ijHG2PxevaIR9jCfE"
bot=telebot.TeleBot(token)
url_base="https://pixabay.com/api/?key=10686442-622439ba8eaab1a9470ba5c92&q="
url_base1='https://api.adorable.io/avatars/285/'
#=================================
@bot.message_handler(content_types=["text"])
def weather(m):
    if m.text=="ربات":
        bot.reply_to(m,"آنلاینم باو 😐")
    if re.search(r'^عکس(\s*[a-zA-Z])+$' ,m.text):
        global ch
        ch = re.search(r'^عکس(\s*[a-zA-Z])+$' ,m.text).group().replace("عکس","")
        global response
        response = requests.get(url_base+ch)
       
        global H
        H = response.json()["hits"]
        try:
          
          bot.send_chat_action(m.chat.id,"upload_photo")
          global pic
          pic =response.json()["hits"][random.randint(0,18)]
        
          bot.send_photo(m.chat.id,pic["largeImageURL"],caption="© Ƶєяσσ & Ƥιxαвαу \n 👍 تعداد لایک ها : {} \n 📥 تعداد دانلود ها : {} \n 📋 تعداد کامنت ها : {} \n 🔎 تعداد ویو ها : {}"
                         .format(pic["likes"],pic["downloads"],pic["comments"],pic["views"]),reply_to_message_id=m.message_id)
        except:
          bot.reply_to(m,"عکس مورد نظر پیدا نشد 😁")
        
    if re.search(r'^کارتون(\s*[a-zA-Z])+$',m.text):
        None

bot.polling(non_stop=True)