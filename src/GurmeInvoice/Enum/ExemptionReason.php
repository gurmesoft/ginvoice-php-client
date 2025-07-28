<?php

namespace GurmeInvoice\Enum;

enum ExemptionReason: string
{
    case KDV301 = '301';
    case KDV302 = '302';
    case KDV303 = '303';
    case KDV304 = '304';
    case KDV305 = '305';
    case KDV306 = '306';
    case KDV307 = '307';
    case KDV308 = '308';
    case KDV309 = '309';
    case KDV310 = '310';
    case KDV311 = '311';
    case KDV312 = '312';
    case KDV313 = '313';
    case KDV314 = '314';
    case KDV315 = '315';
    case KDV316 = '316';
    case KDV317 = '317';
    case KDV318 = '318';
    case KDV319 = '319';
    case KDV320 = '320';
    case KDV321 = '321';
    case KDV322 = '322';
    case KDV323 = '323';
    case KDV324 = '324';
    case KDV325 = '325';
    case KDV326 = '326';
    case KDV327 = '327';
    case KDV328 = '328';
    case KDV329 = '329';
    case KDV330 = '330';
    case KDV331 = '331';
    case KDV332 = '332';
    case KDV333 = '333';
    case KDV334 = '334';
    case KDV335 = '335';
    case KDV336 = '336';
    case KDV337 = '337';
    case KDV338 = '338';
    case KDV339 = '339';
    case KDV340 = '340';
    case KDV341 = '341';
    case KDV342 = '342';
    case KDV343 = '343';
    case OTV101 = '101';
    case OTV102 = '102';
    case OTV103 = '103';
    case OTV104 = '104';
    case OTV105 = '105';
    case OTV106 = '106';
    case OTV107 = '107';
    case OTV108 = '108';

    public function alias(): string
    {
        return match ($this) {
            self::KDV301 => '11/1-a Mal İhracatı (KDV)',
            self::KDV302 => '11/1-a Hizmet İhracatı (KDV)',
            self::KDV303 => '11/1-a Roaming Hizmetleri (KDV)',
            self::KDV304 => '13/a Deniz Hava ve Demiryolu Taşıma Araçlarının Teslimi İle İnşa, Tadil, Bakım ve Onarımları (KDV)',
            self::KDV305 => '13/b Deniz ve Hava Taşıma Araçları İçin Liman Ve Hava Meydanlarında Yapılan Hizmetler (KDV)',
            self::KDV306 => '13/c Petrol Aramaları ve Petrol Boru Hatlarının İnşa ve Modernizasyonuna İlişkin Yapılan Teslim ve Hizmetler (KDV)',
            self::KDV307 => '13/c Maden Arama, Altın, Gümüş ve Platin Madenleri İçin İşletme, Zenginleştirme Ve Rafinaj Faaliyetlerine İlişkin Teslim Ve Hizmetler[KDVGUT-(II/8-4)] (KDV)',
            self::KDV308 => '13/d Teşvikli Yatırım Mallarının Teslimi (KDV)',
            self::KDV309 => '13/e Liman Ve Hava Meydanlarının İnşası, Yenilenmesi Ve Genişletilmesi (KDV)',
            self::KDV310 => '13/f Ulusal Güvenlik Amaçlı Teslim ve Hizmetler (KDV)',
            self::KDV311 => '14/1 Uluslararası Taşımacılık (KDV)',
            self::KDV312 => '15/a Diplomatik Organ Ve Misyonlara Yapılan Teslim ve Hizmetler (KDV)',
            self::KDV313 => '15/b Uluslararası Kuruluşlara Yapılan Teslim ve Hizmetler (KDV)',
            self::KDV314 => '19/2 Usulüne Göre Yürürlüğe Girmiş Uluslar Arası Anlaşmalar Kapsamındaki İstisnalar (KDV)',
            self::KDV315 => '14/3 İhraç Konusu Eşyayı Taşıyan Kamyon, Çekici ve Yarı Romorklara Yapılan Motorin Teslimleri (KDV)',
            self::KDV316 => '11/1-a Serbest Bölgelerdeki Müşteriler İçin Yapılan Fason Hizmetler (KDV)',
            self::KDV317 => '17/4-s Engellilerin Eğitimleri, Meslekleri ve Günlük Yaşamlarına İlişkin Araç-Gereç ve Bilgisayar Programları (KDV)',
            self::KDV318 => 'Geçici 29 3996 Sayılı Kanuna Göre Yap-İşlet-Devret Modeli Çerçevesinde Gerçekleştirilecek Projeler, 3359 Sayılı Kanuna Göre Kiralama Karşılığı Yaptırılan Sağlık Tesislerine İlişkin Projeler ve 652 Sayılı Kanun Hükmünde Kararnameye Göre Kiralama Karşılığı Yaptırılan Eğitim Öğretim Tesislerine İlişkin Projelere İlişkin Teslim ve Hizmetler (KDV)',
            self::KDV319 => '13/g Başbakanlık Merkez Teşkilatına Yapılan Araç Teslimleri (KDV)',
            self::KDV320 => 'Geçici 16 (6111 sayılı K.) İSMEP Kapsamında İstanbul İl Özel İdaresi\'ne Bağlı Olarak Faaliyet Gösteren "İstanbul Proje Koordinasyon Birimi"ne Yapılacak Teslim ve Hizmetler (KDV)',
            self::KDV321 => 'Geçici 26 Birleşmiş Milletler (BM) ile Kuzey Atlantik Antlaşması Teşkilatı (NATO) Temsilcilikleri ve Bu Teşkilatlara Bağlı Program, Fon ve Özel İhtisas Kuruluşları ile İktisadi İşbirliği ve Kalkınma Teşkilatına (OECD) Resmi Kullanımları İçin Yapılacak Mal Teslimi ve Hizmet İfaları, Bunların Sosyal ve Ekonomik Yardım Amacıyla Bedelsiz Olarak Yapacakları Mal Teslimi ve Hizmet İfaları İle İlgili Bunlara Yapılan Mal Teslimi ve Hizmet İfaları (KDV)',
            self::KDV322 => '11/1-a Türkiye\'de İkamet Etmeyenlere Özel Fatura ile Yapılan Teslimler (Bavul Ticareti) (KDV)',
            self::KDV323 => '13/ğ 5300 Sayılı Kanuna Göre Düzenlenen Ürün Senetlerinin İhtisas/Ticaret Borsaları Aracılığıyla İlk Teslimi (KDV)',
            self::KDV324 => '13/h Türkiye Kızılay Derneğine Yapılan Teslim ve Hizmetler ile Türkiye Kızılay Derneğinin Teslim ve Hizmetleri (KDV)',
            self::KDV325 => '13/ı Yem Teslimleri (KDV)',
            self::KDV326 => '13/ı Gıda, Tarım ve Hayvancılık Bakanlığı Tarafından Tescil Edilmiş Gübrelerin Teslimi (KDV)',
            self::KDV327 => '13/ı Gıda, Tarım ve Hayvancılık Bakanlığı Tarafından Tescil Edilmiş Gübrelerin İçeriğinde Bulunan Hammaddelerin Gübre Üreticilerine Teslimi (KDV)',
            self::KDV328 => '13/i Konut veya İşyeri Teslimleri (KDV)',
            self::KDV329 => 'Eğitimde Fırsatları Artırma ve Teknolojiyi İyileştirme Hareketi (FATİH) projesi Kapsamında Milli Eğitim Bakanlığına Yapılacak Mal Teslimi ve Hizmet İfası (KDV)',
            self::KDV330 => 'KDV 13/j md. Organize Sanayi Bölgeleri ile Küçük Sanayi Sitelerinin İnşasına İlişkin Teslim ve Hizmetler (KDV)',
            self::KDV331 => 'KDV 13/m md. Ar-Ge, Yenilik ve Tasarım Faaliyetlerinde Kullanılmak Üzere Yapılan Yeni Makina ve Teçhizat Teslimlerinde İstisna (KDV)',
            self::KDV332 => 'KDV Geçici 39. Md. İmalat Sanayiinde Kullanılmak Üzere Yapılan Yeni Makina ve Teçhizat Teslimlerinde İstisna (KDV)',
            self::KDV333 => 'KDV 13/k md. Kapsamında Genel ve Özel Bütçeli Kamu İdarelerine, İl Özel İdarelerine, Belediyelere ve Köylere bağışlanan Tesislerin İnşasına İlişkin İstisna (KDV)',
            self::KDV334 => 'KDV 13/l md. Kapsamında Yabancılara Verilen Sağlık Hizmetlerinde İstisna (KDV)',
            self::KDV335 => 'KDV 13/n Basılı Kitap ve Süreli Yayınların Teslimleri (KDV)',
            self::KDV336 => 'Geçici 40 UEFA Müsabakaları Kapsamında Yapılacak Teslim ve Hizmetler (KDV)',
            self::KDV337 => 'Türk Akım Gaz Boru Hattı Projesine İlişkin Anlaşmanın (9/h) Maddesi Kapsamındaki Gaz Taşıma Hizmetleri (KDV)',
            self::KDV338 => 'İmalatçıların Mal İhracatları (KDV)',
            self::KDV339 => 'İmalat Sanayii ile Turizme Yönelik Yatırım Teşvik Belgesi Kapsamındaki İnşaat İşlerine İlişkin Teslim ve Hizmetler (KDV)',
            self::KDV340 => 'Elektrik Motorlu Taşıt Araçlarının Geliştirilmesine Yönelik Mühendislik Hizmetleri (KDV)',
            self::KDV341 => 'Afetzedelere Bağışlanacak Konutların İnşasına İlişkin İstisna (KDV)',
            self::KDV342 => 'Genel Bütçeli Kamu İdarelerine Bağışlanacak Taşınmazların İnşasına İlişkin İstisna (KDV)',
            self::KDV343 => 'Genel Bütçeli Kamu İdarelerine Bağışlanacak Konutların Yabancı Devlet Kurum ve Kuruluşlarına Teslimine İlişkin İstisna (KDV)',
            self::OTV101 => 'İhracat İstisnası (ÖTV)',
            self::OTV102 => 'Diplomatik İstisna (ÖTV)',
            self::OTV103 => 'Askeri Amaçlı İstisna (ÖTV)',
            self::OTV104 => 'Petrol Arama Faaliyetlerinde Bulunanlara Yapılan Teslimler (ÖTV)',
            self::OTV105 => 'Uluslararası Anlaşmadan Doğan İstisna (ÖTV)',
            self::OTV106 => 'Diğer İstisnalar (ÖTV)',
            self::OTV107 => '7/a Maddesi Kapsamında Yapılan Teslimler (ÖTV)',
            self::OTV108 => 'Geçici 5. Madde Kapsamında Yapılan Teslimler (ÖTV)',
        };
    }
}
