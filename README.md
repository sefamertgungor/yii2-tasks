# yii2-tasks
Oluşturulan modül bir şirketin ofisinde ufak çaplı yapılması gereken görevleri düzenlemek için kullanılır. Bu şekilde işlemler yaparak tablolar üzerinde gerekli değişiklikler gerçekleştirilir.
<br/> <br/>
Modül ile gerçekleştirilebilecek işlevler:
- Yapılması gereken görevler girilebilir.
- Tamamlanan görevler silinebilir.
- Mevcut bulunan görevler üzerinde düzenleme yapılabilir.
- Mevcut bulunan görevler incelenebilir.
- Silinmiş olan görevleri görüntülenebilir.
### Kurulum
1-ssh komutu ile vagrant sanal makinesine bağlanın. Daha sonra /var/www/advanced yolu ile dizine gidin.
<br/>
   `composer require --prefer-dist sefemertgungor/yii2-tasks "dev-main"` yardımıyle modül kurulumunu yapın.
<br/><br/>
2-Advanced projenizin altındaki backend\config\main.php dosyasındaki modules'e kendi modülümüzün yolunu ekliyoruz.
<br/>
```
'modules' => [
        'tasks' =>[
            'class' => 'sefamertgungor\tasks\Module'
          
        ]

    ],
}

```
