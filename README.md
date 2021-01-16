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
3-Modülü kullanabilmek için son olarak migrations işlemini yapmanız gerekiyor. ssh komutu ile proje dizinine gidiniz ve ardından modül içinde kullanılan tabloların veritabanına kurulabilmesi için migration işlemini gerçekleştiriniz.<br/>
`php yii migrate/up --migrationPath=@vendor/sefamertgungor/yii2-tasks/src/migrations` İşlemini yaptıktan sonra artık modül kullanılabilir hale geldi.
<br/><br/>
http://advanced/backend/web/index.php?r=note/not/index adresine giderek modülü kullanabilirsiniz.
### Modül Genel Yapısı
İlk önce modülün genel iskeleti Gii kullanılarak yaratılmıştır. Daha sonra ek olarak silinen görevleri tutacak olan veritabanındaki tablo migrations yardımıyla oluşturulmuştur. Ardından silinen görevleri tutan tablonu kontrolü için el ile Gii kullanılmadan model, view oluşturulmuştur. Ayrıca Controller içerisine gerekli fonksiyon eklemeleri yapılmıştır. Ve son olarak düzenlenerek modül ortaya çıkarılmıştır. 
#### Migrations:
![internet4](https://user-images.githubusercontent.com/72219337/104810965-3a3da300-5809-11eb-9fe8-602fd1c8a7a5.jpg)<br/>
Modül içerisinde migrations ile 2 tane tablo oluşturulmuştur. Mevcut bulunan görevleri tutan tablo ve silinen görevleri tutan tablo olarak. Bu tabloların değişkenleri aynıdır. Birbirleriyle 'name' alanı ile ilişki kurarlar.
#### Gii:
Veritabanı içerisinde bulunan tasks tablosu için gii yardımıyla model oluşturuldu . Yine veritabanı içerisinde bulunan tablo üzerinde işlemler (DELETE,UPDATE,CREATE, vb.) yapabilmek amacıyla model üzerinde CRUD GENERATOR kullanılmıştır. Bu sayede Controller ve Views dosyaları oluşturularak modülün genel yapısı inşa edilmiştir.
#### Modül Görseller:
1-![internet1](https://user-images.githubusercontent.com/72219337/104810915-fd71ac00-5808-11eb-8f10-485e08b3b90d.jpg)
2-![Internet2](https://user-images.githubusercontent.com/72219337/104810934-1712f380-5809-11eb-9b62-c47c0ce9d136.jpg)
3-![internet3](https://user-images.githubusercontent.com/72219337/104810939-2134f200-5809-11eb-92ce-01a9cf1f633b.jpg)
