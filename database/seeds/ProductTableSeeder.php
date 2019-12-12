<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('products')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Product::create([
            'id_type' => 1,
            'name' => 'ĐỒNG HỒ EPOS SWISS E-7000.701.20.98.25',
            'unit_price' => 13000000,
            'promotion_price' => 12500000,
            'image' => 'anh1.jpg',
            'quantity' => 100,
            'description' => 'Hãng sản xuất : Epos Swiss
            Xuất xứ : Thụy Sỹ
            Bảo hành: 10 năm
            Loại đồng hồ : Đồng hồ nam
            Loại kính : Sapphire ( Kính chống trầy )
            Chất liệu vỏ : Thép không gỉ
            Chất liệu dây : Dây da
            Đường kính vỏ : 41,5 mm
            Độ dày vỏ : 7 mm
            Mức độ chịu nước : 5 ATM
            Năng lượng sử dụng : Quartz/ Pin
            Tư vấn và đặt hàng: 098.668.1189
            Giao hàng tận nơi, thanh toán trực tiếp khi nhận hàng
            Miễn phí vận chuyển'
        ]);
        Product::create([
            'id_type' => 1,
            'name' => 'ĐỒNG HỒ EPOS SWISS E-7000.701.20.95.25',
           'unit_price' => 13000000,
            'promotion_price' => 12500000,
            'image' => 'anh2.jpg',
            'quantity' => 100,
            'description' => 'Hãng sản xuất : Epos Swiss
            Xuất xứ : Thụy Sỹ           
            Bảo hành: 10 năm           
            Loại đồng hồ : Đồng hồ nam           
            Loại kính : Sapphire ( Kính chống trầy )           
            Chất liệu vỏ : Thép không gỉ            
            Chất liệu dây : Dây da            
            Đường kính vỏ : 41,5 mm          
            Độ dày vỏ : 7 mm
            Mức độ chịu nước : 5 ATM
            Năng lượng sử dụng : Quartz/ Pin'
        ]);
        Product::create([
            'id_type' => 1,
            'name' => 'ĐỒNG HỒ EPOS SWISS E-7000.701.22.16.26',
            'unit_price' => 5100000,
            'promotion_price' => 5000000,
            'image' => 'anh3.jpg',
            'quantity' => 100,
            'description' => 'Hãng sản xuất : Epos Swiss
            Xuất xứ : Thụy Sỹ           
            Bảo hành: 10 năm          
            Loại đồng hồ : Đồng hồ nam          
            Loại kính : Sapphire ( Kính chống trầy )           
            Chất liệu vỏ : Thép không gỉ mạ vàng PVD            
            Chất liệu dây : Dây da            
            Đường kính vỏ : 41,5 mm            
            Độ dày vỏ : 7 mm            
            Mức độ chịu nước : 5 ATM           
            Năng lượng sử dụng : Quartz/ Pin'
        ]);
        Product::create([
            'id_type' => 1,
            'name' => 'ĐỒNG HỒ EPOS SWISS E-7000.701.22.15.25',
            'unit_price' => 5400000,
            'promotion_price' => 5400000,
            'image' => 'anh4.jpg',
            'quantity' => 100,
            'description' => 'Hãng sản xuất : Epos Swiss
            Xuất xứ : Thụy Sỹ          
            Bảo hành: 10 năm            
            Loại đồng hồ : Đồng hồ nam            
            Loại kính : Sapphire ( Kính chống trầy )           
            Chất liệu vỏ : Thép không gỉ mạ vàng PVD            
            Chất liệu dây : Dây da           
            Đường kính vỏ : 41,5 mm           
            Độ dày vỏ : 7 mm           
            Mức độ chịu nước : 5 ATM 
            Năng lượng sử dụng : Quartz/ Pin'
        ]);
        Product::create([
            'id_type' => 1,
            'name' => 'ĐỒNG HỒ EPOS SWISS E-3390.156.22.20.32',
            'unit_price' => 3000000,
            'promotion_price' => 2500000,
            'image' => 'anh5.jpg',
            'quantity' => 100,
            'description' => 'Hãng sản xuất : Epos Swiss
            Xuất xứ : Thụy Sỹ           
            Bảo hành: 10 năm           
            Loại đồng hồ : Đồng hồ nam           
            Loại kính : Sapphire ( Kính chống trầy )           
            Chất liệu vỏ :Thép không gỉ  mạ vàng PVD           
            Chất liệu dây :Thép không gỉ mạ vàng PVD           
            Đường kính vỏ : 41 mm          
            Độ dày vỏ : 9 mm          
            Mức độ chịu nước : 5 ATM
            Năng lượng sử dụng : Cơ tự động'
        ]);
        Product::create([
            'id_type' => 1,
            'name' => 'ĐỒNG HỒ EPOS SWISS E-3387.152.22.28.32',
            'unit_price' => 1999000,
            'promotion_price' => 1999000,
            'image' => 'anh6.jpg',
            'quantity' => 100,
            'description' => 'Hãng sản xuất : Epos Swiss

            Xuất xứ : Thụy Sỹ
            
            Bảo hành: 10 năm
            
            Loại đồng hồ : Đồng hồ nam

            Loại kính : Sapphire ( Kính chống trầy )
            
            Chất liệu vỏ : Thép không gỉ mạ vàng PVD
            
            Chất liệu dây : Thép không gỉ mạ vàng PVD
            
            Đường kính vỏ : 39 mm
            
            Độ dày vỏ: 8mm
            
            Mức độ chịu nước : 3 ATM
            
            Năng lượng sử dụng : cơ tự động'
        ]);
        Product::create([
            'id_type' => 2,
            'name' => 'ĐỒNG HỒ ATLANTIC AT-61352.45.21',
            'unit_price' => 4500000,
            'promotion_price' => 3200000,
            'image' => 'anh10.jpg',
            'quantity' => 100,
            'description' => 'Hãng sản xuất: Atlantic

            Kiểu dáng: Đồng hồ nam
            
            Chất liệu dây: dây da
            
            Chất liệu mặt:  Sapphire ( Kính chống trầy )
            
            Chất liệu vỏ : Thép không gỉ mạ vàng PVD
            
            Đường kín vỏ : 42mm
            
            Chống nước: 5 ATM
            
            Năng lượng sử dụng: Quartz
            
            Bảo hành: 10 năm
            
            Thương hiệu: Thụy Sỹ
             '
        ]);
        Product::create([
            'id_type' => 2,
            'name' => 'ĐỒNG HỒ ATLANTIC SWISS AT-60347.45.21',
            'unit_price' => 7500000,
            'promotion_price' => 7500000,
            'image' => 'anh11.jpg',
            'quantity' => 100,
            'description' => 'Hãng sản xuất: Atlantic

            Kiểu dáng: Đồng hồ nam
            
            Chất liệu dây: Thép không gỉ mạ vàng PVD
            
            Chất liệu mặt:  Sapphire ( Kính chống trầy )
            
            Chất liệu vỏ : Thép không gỉ mạ vàng PVD
            
            Kích thước vỏ: 40 mm
            
            Độ dày vỏ: 5 mm
            
            Chịu nước: 5 ATM
            
            Năng lượng sử dụng: pin
            
            Bảo hành: 10 năm
            
            Thương hiệu: Thụy Sỹ
            
            Máy: Thụy Sỹ
             '
        ]);
        Product::create([
            'id_type' => 2,
            'name' => 'ĐỒNG HỒ ATLANTIC SWISS AT-60347.43.31',
            'unit_price' => 3900000,
            'promotion_price' => 3900000,
            'image' => 'anh12.jpg',
            'quantity' => 100,
            'description' => 'Hãng sản xuất: Atlantic

            Chất liệu dây: Thép không gỉ (mạ Demi PVD )
            
            Chất liệu mặt:  Sapphire ( Kính chống trầy )
            
            Chất liệu vỏ : Thép không gỉ (mạ Demi PVD )
            
            Năng lượng sử dụng: Quartz
            
            Độ chịu nước : 5 ATM
            
            Đường kính: 40 mm
            
            Bảo hành: 10 năm
            
            Thương hiệu: Thụy Sỹ
             '
        ]);
        Product::create([
            'id_type' => 2,
            'name' => 'ĐỒNG HỒ ATLANTIC SWISS AT-62341.45.61',
            'unit_price' => 3000000,
            'promotion_price' => 1900900,
            'image' => 'anh13.jpg',
            'quantity' => 100,
            'description' => 'Hãng sản xuất: Atlantic

            Chất liệu dây: Dây da
            
            Chất liệu mặt:  Sapphire ( Kính chống trầy )
            
            Chất liệu vỏ : Thép không gỉ mạ vàng PVD
            
            Năng lượng sử dụng: Quartz
            
            Độ chịu nước : 3 ATM
            
            Đường kính: 40 mm
            
            Độ dày: 6 mm
            
            Bảo hành: 10 năm
            
            Thương hiệu: Thụy Sỹ
            
            Máy: Thụy Sỹ
             '
        ]);
        Product::create([
            'id_type' => 2,
            'name' => 'ĐỒNG HỒ ATLANTIC SWISS AT-60342.45.11',
            'unit_price' => 1400000,
            'promotion_price' => 1200000,
            'image' => 'anh14.jpg',
            'quantity' => 100,
            'description' => 'Hãng sản xuất: Atlantic

            Chất liệu dây: Dây da
            
            Chất liệu mặt:  Sapphire ( Kính chống trầy )
            
            Chất liệu vỏ : Thép không gỉ mạ vang PVD
            
            Năng lượng sử dụng: Quartz
            
            Độ chịu nước : 5 ATM
            
            Đường kính: 40 mm
            
            Bảo hành: 10 năm
            
            Thương hiệu: Thụy Sỹ
             '
        ]);
        Product::create([
            'id_type' => 2,
            'name' => 'ĐỒNG HỒ ATLANTIC SWISS AT-62455.45.21',
            'unit_price' => 500000,
            'promotion_price' => 450000,
            'image' => 'anh15.jpg',
            'quantity' => 100,
            'description' => 'Hãng sản xuất: Atlantic

            Kiểu dáng: Đồng hồ nam
            
            Chất liệu dây: Thép không gỉ 316L mạ vàng PVD
            
            Chất liệu mặt:  Sapphire ( Kính chống trầy )
            
            Chất liệu vỏ :Thép không gỉ 316L  mạ vàng PVD
            
            Đường kính vỏ : 44mm
            
            Chống nước: 5 bar
            
            Năng lượng sử dụng: Quartz
            
            Chức năng: Bấm giờ thể thao (Chronograph)
            
            Bảo hành: 10 năm
            
            Thương hiệu: Thụy Sỹ
             '
        ]);

        Product::create([
            'id_type' => 3,
            'name' => 'ĐỒNG HỒ ARIES GOLD AG-G1013Z 2TG-S',
            'unit_price' => 24000000,
            'promotion_price' => 20500000,
            'image' => 'anh20.jpg',
            'quantity' => 100,
            'description' => 'Hãng sản xuất: Aries Gold

            Loại đồng hồ: đồng hồ nam 
            
            Loại kính:  Mineral Crystal
            
            Chất liệu vỏ: Thép không gỉ mạ Demi PVD
            
            Đường kính vỏ: 40 mm
            
            Độ dày vỏ: 8 mm
            
            Chất liệu dây: Thép không gỉ mạ Demi PVD
            
            Năng lượng sử dụng: QUARTZ
            
            Bảo hành: 10 năm
             '
        ]);
        Product::create([
            'id_type' => 3,
            'name' => 'ĐỒNG HỒ ARIES GOLD AG-G1013Z G-S',
            'unit_price' => 12000000,
            'promotion_price' => 1100000,
            'image' => 'anh21.jpg',
            'quantity' => 100,
            'description' => 'Hãng sản xuất: Aries Gold

            Loại đồng hồ: đồng hồ nam
            
            Loại kính:  Hardened Mineral Crystal
            
            Chất liệu vỏ: Thép không gỉ mạ PVD
            
            Đường kính vỏ: 40 mm
            
            Độ dày vỏ: 8 mm
            
            Chất liệu dây: Thép không gỉ mạ PVD
            
            Năng lượng sử dụng: QUARTZ
            
            Bảo hành: 10 năm
             '
        ]);
        Product::create([
            'id_type' => 3,
            'name' => 'ĐỒNG HỒ ARIES GOLD AG-G1001 G-BR',
            'unit_price' => 8000000,
            'promotion_price' => 7500000,
            'image' => 'anh22.jpg',
            'quantity' => 100,
            'description' => 'Thương hiệu:                 Đồng hồ Aries Gold

            Kiểu dáng:                     Đồng hồ nam
            
            Máy:                             Japan. Quartz. Time Module VX12
            
            Chất liệu vỏ:                   Thép không gỉ mạ PVD
            
            Chất liệu dây:                 Dây da
            
            Màu vỏ:                          Gold
            
            Kích thước mặt:              40mm
            
            Chống nước:                  3ATM
            
            Năng lượng sử dụng:      Quartz
            
            Xuất xứ:                        Singapore
            
            Loại kính:                       Sapphire ( kính chống trầy )
            
            Bảo hành:                      10 năm
             '
        ]);
        Product::create([
            'id_type' => 3,
            'name' => 'ĐỒNG HỒ ARIES GOLD AG-U7010 Z-BK',
            'unit_price' => 10000000,
            'promotion_price' => 9990000,
            'image' => 'anh23.jpg',
            'quantity' => 100,
            'description' => 'Thương hiệu: Đồng hồ Aries Gold 

            Máy: Japan. Quartz
            
            Hệ điều hành : Andriod 4.4
            
            Màu : Đen
            
            Các chức năng bao gồm : Đo nhịp tim, đo khoảng cách , đếm bước chân, đo lượng calories, sleep monitoring : theo dõi giấc ngủ, đo thời gian ngủ và chất lượng giấc ngủ; thông báo cuộc gọi đến trên điện thoại, thông báo tin nhắn trên điện thoại, đồng hồ báo thức, anti lost - khi điện thoại của bạn cách xa bạn 30 feet, vòng này sẽ rung lên để báo cho bạn biết ; sedentary alert : khi bạn ở trạng thái ngồi quá lâu, sẽ báo hiệu để bạn đứng lên và hoạt động. ; Selfie control : điều khiển từ xa để chụp ảnh selfie bằng thiết bị điện thoại ;
            
            Độ chịu nước của Smart air tracker là IP65 - chống bụi hoàn toàn + sử dụng được đi mưa, nước phun nhẹ
             '
        ]);
        Product::create([
            'id_type' => 3,
            'name' => 'ĐỒNG HỒ ARIES GOLD AG-G9005G RG-S',
            'unit_price' => 4000000,
            'promotion_price' => 3800000,
            'image' => 'anh24.jpg',
            'quantity' => 100,
            'description' => 'Hãng sản xuất: Aries Gold

            Loại đồng hồ: đồng hồ nam
            
            Loại kính:  Hardened Mineral Crystal
            
            Chất liệu vỏ: Thép không gỉ mạ PVD
            
            Đường kính vỏ: 40 mm
            
            Độ dày vỏ: 8 mm
            
            Chất liệu dây: Thép không gỉ mạ PVD
            
            Năng lượng sử dụng: QUARTZ
            
            Bảo hành: 10 năm
             '
        ]);
        Product::create([
            'id_type' => 3,
            'name' => 'ĐỒNG HỒ ARIES GOLD AG-G101 G-BU',
            'unit_price' => 3600000,
            'promotion_price' => 3600000,
            'image' => 'anh25.jpg',
            'quantity' => 100,
            'description' => 'Thương hiệu:                 Đồng hồ Aries Gold

            Kiểu dáng:                     Đồng hồ nam
            
            Máy:                             Time Module VX3FA
            
            Chất liệu vỏ:                   Thép không gỉ mạ PVD
            
            Chất liệu dây:                 dây da
            
            Màu vỏ:                          Gold
            
            Kích thước mặt:              43mm
            
            Độ dày vỏ:                      10.95mm
            
            Trọng lượng:                  70g
            
            Chống nước:                  5ATM
            
            Năng lượng sử dụng:      Quartz
            
            Xuất xứ:                        Singapore
            
            Loại kính:                       Sapphire ( Kính chống trầy )
             '
        ]);

        Product::create([
            'id_type' => 4,
            'name' => 'ĐỒNG HỒ JACQUES LEMANS JL-1-1654.2ZD',
            'unit_price' => 1800000,
            'promotion_price' => 1200000,
            'image' => 'anh30.jpg',
            'quantity' => 100,
            'description' => 'Thương hiệu:
            Jacques Lemans
            Xuất xứ:      Áo
            Kiểu dáng:         Đồng hồ Nam
            Năng lượng:          Quartz/Pin
            Độ chịu nước:           10 ATM
            Chất liệu mặt:Krysterna crystal ( kính cứng )
             '
        ]);
        Product::create([
            'id_type' => 4,
            'name' => 'ĐỒNG HỒ JACQUES LEMANS JL-40-1D',
            'unit_price' => 7000000,
            'promotion_price' => 5500000,
            'image' => 'anh31.jpg',
            'quantity' => 100,
            'description' => 'Hãng sản xuất: Jacques Lemans

            Loại đồng hồ: Đồng hồ nam
            
            Loại kính: Hardened crystex crystal
            
            Chất liệu vỏ: Thép không gỉ mạ PVD rose gold
            
            Đường kính vỏ: 38 mm
            
            Chất liệu dây: Dây da
            
            Năng lượng sử dụng: Quartz
            
            Mức độ chịu nước 10 ATM
            
            Bảo hành: 10 năm
             '
        ]);
        Product::create([
            'id_type' => 4,
            'name' => 'ĐỒNG HỒ JACQUES LEMANS JL-1-1654ZD',
            'unit_price' => 6000000,
            'promotion_price' => 5200000,
            'image' => 'anh32.jpg',
            'quantity' => 100,
            'description' => 'Hãng sản xuất: Jacques Lemans

            Loại đồng hồ: đồng hồ nam
            
            Loại kính: hardened crystex crystal (Kính cứng )
            
            Chất liệu vỏ: Thép không gỉ mạ PVD
            
            Đường kính vỏ: 40mm
            
            Độ dày vỏ: 9 mm
            
            Chất liệu dây: Dây da
            
            Bảo hành: 10 năm
            
            Độ chịu nước: 10ATM
            
            Năng lượng sử dụng: Quartz
             '
        ]);
        Product::create([
            'id_type' => 4,
            'name' => 'ĐỒNG HỒ JACQUES LEMANS JL-1-1654.2ZK',
            'unit_price' => 13000000,
            'promotion_price' => 10500000,
            'image' => 'anh33.jpg',
            'quantity' => 100,
            'description' => 'Hãng sản xuất: Jacques Lemans

            Loại đồng hồ: đồng hồ nam
            
            Loại kính: hardened crystex crystal (Kính cứng )
            
            Chất liệu vỏ: Thép không gỉ mạ PVD
            
            Đường kính vỏ: 40mm
            
            Độ dày vỏ: 9 mm
            
            Chất liệu dây: Dây da
            
            Bảo hành: 10 năm
            
            Độ chịu nước: 10ATM
            
            Năng lượng sử dụng: Quartz
             '
        ]);
        Product::create([
            'id_type' => 4,
            'name' => 'ĐỒNG HỒ JACQUES LEMANS JL-42-6H',
            'unit_price' => 13000000,
            'promotion_price' => 13000000,
            'image' => 'anh34.jpg',
            'quantity' => 100,
            'description' => 'Hãng sản xuất: Jacques Lemans

            Loại đồng hồ: đồng hồ nam
            
            Loại kính: hardened crystex crystal ( kính cứng )
            
            Chất liệu vỏ: Thép không gỉ mạ Demi PVD
            
            Đường kính vỏ: 42 mm
            
            Chất liệu dây: Thép không gỉ mạ Demi PVD
            
            Năng lượng sử dụng: Quartz
            
            Mức độ chịu nước: 10 ATM
            
            Bảo hành: 10 năm
             '
        ]);
        Product::create([
            'id_type' => 4,
            'name' => 'ĐỒNG HỒ JACQUES LEMANS JL-1-1654.2ZB',
            'unit_price' => 3000000,
            'promotion_price' => 2300000,
            'image' => 'anh35.jpg',
            'quantity' => 100,
            'description' => 'Hãng sản xuất: Jacques Lemans

            Loại đồng hồ: đồng hồ nam
            
            Loại kính: hardened crystex crystal ( kính cứng )
            
            Chất liệu vỏ: Thép không gỉ mạ Demi PVD
            
            Đường kính vỏ: 42 mm
            
            Chất liệu dây: Thép không gỉ mạ Demi PVD
            
            Năng lượng sử dụng: Quartz
            
            Mức độ chịu nước: 10 ATM
            
            Bảo hành: 10 năm
             '
        ]);
    }
}
