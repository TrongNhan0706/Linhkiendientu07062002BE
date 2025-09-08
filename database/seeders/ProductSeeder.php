<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $desc = '<ul>
              <li>
                <p>
                  <strong>Màn hình:</strong> Công nghệ LCD, OLED hoặc AMOLED; độ
                  phân giải HD, Full HD, 2K, 4K; tần số quét từ 60Hz đến 120Hz;
                  hỗ trợ cảm ứng đa điểm, hiển thị màu sắc chân thực.
                </p>
              </li>
              <li>
                <p>
                  <strong>Bộ xử lý (CPU & GPU):</strong> CPU xử lý tác vụ, GPU
                  xử lý đồ họa; chip phổ biến gồm Snapdragon, Apple A-series,
                  MediaTek, Exynos; quyết định hiệu năng khi chơi game hoặc chạy
                  ứng dụng.
                </p>
              </li>
              <li>
                <p>
                  <strong>Bộ nhớ RAM & ROM:</strong> RAM 4GB - 16GB, hỗ trợ đa
                  nhiệm mượt mà; ROM 64GB, 128GB, 256GB hoặc 1TB; có thể hỗ trợ
                  thẻ nhớ ngoài MicroSD tùy máy.
                </p>
              </li>
              <li>
                <p>
                  <strong>Camera:</strong> Camera sau từ 1 - 4 ống kính (chính,
                  góc rộng, macro, tele); camera trước phục vụ selfie và video
                  call; hỗ trợ chống rung OIS/EIS, quay video 4K/8K, AI Camera.
                </p>
              </li>
              <li>
                <p>
                  <strong>Pin & Sạc:</strong> Dung lượng 3000mAh - 6000mAh; hỗ
                  trợ sạc nhanh 18W - 120W, sạc không dây, sạc ngược; công nghệ
                  tiết kiệm pin thông minh.
                </p>
              </li>
              <li>
                <p>
                  <strong>Hệ điều hành & Giao diện:</strong> Android (Samsung,
                  Xiaomi, Oppo, Vivo, v.v.) hoặc iOS (iPhone); tích hợp trợ lý
                  ảo, bảo mật, kho ứng dụng phong phú.
                </p>
              </li>
              <li>
                <p>
                  <strong>Kết nối & Tính năng khác:</strong> Hỗ trợ 4G, 5G,
                  Wi-Fi, Bluetooth, NFC; bảo mật vân tay và nhận diện khuôn mặt;
                  cổng kết nối USB Type-C hoặc Lightning; khả năng chống nước,
                  chống bụi theo chuẩn IP67/IP68.
                </p>
              </li>
            </ul>
            <p>
              <br />
              <strong>Cách chọn điện thoại ngon</strong>
            </p>
            <ul>
              <li>
                <p>
                  <strong>Xác định nhu cầu:</strong> Nếu chủ yếu nghe gọi, dùng
                  mạng xã hội → chọn máy tầm trung; nếu chơi game, quay phim →
                  chọn máy cấu hình mạnh, camera tốt.
                </p>
              </li>
              <li>
                <p>
                  <strong>Hiệu năng:</strong> Nên ưu tiên CPU/GPU mạnh mẽ
                  (Snapdragon series 7, 8 hoặc Apple A-series) để đảm bảo dùng
                  lâu dài.
                </p>
              </li>
              <li>
                <p>
                  <strong>Dung lượng bộ nhớ:</strong> Ít nhất 6GB RAM và 128GB
                  ROM để chạy đa nhiệm và lưu trữ thoải mái.
                </p>
              </li>
              <li>
                <p>
                  <strong>Pin & sạc:</strong> Chọn máy pin từ 4500mAh trở lên,
                  có sạc nhanh để thuận tiện sử dụng.
                </p>
              </li>
              <li>
                <p>
                  <strong>Camera:</strong> Nên ưu tiên máy có nhiều tính năng hỗ
                  trợ (chống rung, quay video 4K, chụp đêm).
                </p>
              </li>
              <li>
                <p>
                  <strong>Hệ điều hành:</strong> Nếu thích sự ổn định, cập nhật
                  lâu dài → chọn iOS; nếu muốn tùy biến, đa dạng lựa chọn giá →
                  chọn Android.
                </p>
              </li>
              <li>
                <p>
                  <strong>Ngân sách:</strong> So sánh giá với nhu cầu thực tế để
                  chọn máy phù hợp, tránh lãng phí.
                </p>
              </li>
            </ul>';

        $img = '/assets/user/images/featured/features-';

        $products = [
            [
                'name' => 'IPhone 16 Pro Max 128GB',
                'img' => $img.'1.png',
                'description' => $desc,
                'price' => 18790000,
                'inventory' => 20,
                'sort_description' => 'ĐôngNam Shop chuyên cung cấp linh kiện điện tử, phụ kiện máy tính và thiết bị công nghệ uy tín. Chúng tôi có đa dạng các sản phẩm như mainboard, CPU, RAM, ổ cứng, card đồ họa, chuột, bàn phím, tai nghe.',
                'facebook' => '111',
                'instagram' => '111',
                'tiktok' => '111',
                'youtube' => '111',
                'category_id' => 1,
            ],
            [
                'name' => 'IPhone 15 Pro Max 256GB',
                'img' => $img.'2.png',
                'description' => $desc,
                'price' => 27690000,
                'inventory' => 20,
                'sort_description' => 'ĐôngNam Shop chuyên cung cấp linh kiện điện tử, phụ kiện máy tính và thiết bị công nghệ uy tín. Chúng tôi có đa dạng các sản phẩm như mainboard, CPU, RAM, ổ cứng, card đồ họa, chuột, bàn phím, tai nghe.',
                'facebook' => '111',
                'instagram' => '111',
                'tiktok' => '111',
                'youtube' => '111',
                'category_id' => 1,
            ],
            [
                'name' => 'IPhone 14 Pro Max 256GB',
                'img' => $img.'3.png',
                'description' => $desc,
                'price' => 27990000,
                'inventory' => 20,
                'sort_description' => 'ĐôngNam Shop chuyên cung cấp linh kiện điện tử, phụ kiện máy tính và thiết bị công nghệ uy tín. Chúng tôi có đa dạng các sản phẩm như mainboard, CPU, RAM, ổ cứng, card đồ họa, chuột, bàn phím, tai nghe.',
                'facebook' => '111',
                'instagram' => '111',
                'tiktok' => '111',
                'youtube' => '111',
                'category_id' => 1,
            ],
            [
                'name' => 'IPhone 15 256GB',
                'img' => $img.'4.png',
                'description' => $desc,
                'price' => 18790000,
                'inventory' => 20,
                'sort_description' => 'ĐôngNam Shop chuyên cung cấp linh kiện điện tử, phụ kiện máy tính và thiết bị công nghệ uy tín. Chúng tôi có đa dạng các sản phẩm như mainboard, CPU, RAM, ổ cứng, card đồ họa, chuột, bàn phím, tai nghe.',
                'facebook' => '111',
                'instagram' => '111',
                'tiktok' => '111',
                'youtube' => '111',
                'category_id' => 1,
            ],
            [
                'name' => 'CPU Intel Core i5 12400F',
                'img' => $img.'5.png',
                'description' => $desc,
                'price' => 3090000,
                'inventory' => 20,
                'sort_description' => 'ĐôngNam Shop chuyên cung cấp linh kiện điện tử, phụ kiện máy tính và thiết bị công nghệ uy tín. Chúng tôi có đa dạng các sản phẩm như mainboard, CPU, RAM, ổ cứng, card đồ họa, chuột, bàn phím, tai nghe.',
                'facebook' => '111',
                'instagram' => '111',
                'tiktok' => '111',
                'youtube' => '111',
                'category_id' => 2,
            ],
            [
                'name' => 'CPU AMD Ryzen 5 5500',
                'img' => $img.'6.png',
                'description' => $desc,
                'price' => 1690000,
                'inventory' => 20,
                'sort_description' => 'ĐôngNam Shop chuyên cung cấp linh kiện điện tử, phụ kiện máy tính và thiết bị công nghệ uy tín. Chúng tôi có đa dạng các sản phẩm như mainboard, CPU, RAM, ổ cứng, card đồ họa, chuột, bàn phím, tai nghe.',
                'facebook' => '111',
                'instagram' => '111',
                'tiktok' => '111',
                'youtube' => '111',
                'category_id' => 2,
            ],
            [
                'name' => 'Chuột bluetooth Logitech MX Master 2S',
                'img' => $img.'7.png',
                'description' => $desc,
                'price' => 1390000,
                'inventory' => 20,
                'sort_description' => 'ĐôngNam Shop chuyên cung cấp linh kiện điện tử, phụ kiện máy tính và thiết bị công nghệ uy tín. Chúng tôi có đa dạng các sản phẩm như mainboard, CPU, RAM, ổ cứng, card đồ họa, chuột, bàn phím, tai nghe.',
                'facebook' => '111',
                'instagram' => '111',
                'tiktok' => '111',
                'youtube' => '111',
                'category_id' => 3,
            ],
            [
                'name' => 'Tai nghe Gaming Hyperx Cloud 3',
                'img' => $img.'8.png',
                'description' => $desc,
                'price' => 1940000,
                'inventory' => 20,
                'sort_description' => 'ĐôngNam Shop chuyên cung cấp linh kiện điện tử, phụ kiện máy tính và thiết bị công nghệ uy tín. Chúng tôi có đa dạng các sản phẩm như mainboard, CPU, RAM, ổ cứng, card đồ họa, chuột, bàn phím, tai nghe.',
                'facebook' => '111',
                'instagram' => '111',
                'tiktok' => '111',
                'youtube' => '111',
                'category_id' => 3,
            ],
            [
                'name' => 'Infineon Technologies',
                'img' => $img.'9.png',
                'description' => $desc,
                'price' => 982000,
                'inventory' => 1000,
                'sort_description' => 'ĐôngNam Shop chuyên cung cấp linh kiện điện tử, phụ kiện máy tính và thiết bị công nghệ uy tín. Chúng tôi có đa dạng các sản phẩm như mainboard, CPU, RAM, ổ cứng, card đồ họa, chuột, bàn phím, tai nghe.',
                'facebook' => '111',
                'instagram' => '111',
                'tiktok' => '111',
                'youtube' => '111',
                'category_id' => 4,
            ],
            [
                'name' => 'Tụ hoá, tụ điện nhôm chân cắm 400V',
                'img' => $img.'10.png',
                'description' => $desc,
                'price' => 8000,
                'inventory' => 2000,
                'sort_description' => 'ĐôngNam Shop chuyên cung cấp linh kiện điện tử, phụ kiện máy tính và thiết bị công nghệ uy tín. Chúng tôi có đa dạng các sản phẩm như mainboard, CPU, RAM, ổ cứng, card đồ họa, chuột, bàn phím, tai nghe.',
                'facebook' => '111',
                'instagram' => '111',
                'tiktok' => '111',
                'youtube' => '111',
                'category_id' => 4,
            ],
            [
                'name' => 'Capacitor gốm đĩa cao áp cho thiết bị âm thanh',
                'img' => $img.'11.png',
                'description' => $desc,
                'price' => 1060,
                'inventory' => 2000,
                'sort_description' => 'ĐôngNam Shop chuyên cung cấp linh kiện điện tử, phụ kiện máy tính và thiết bị công nghệ uy tín. Chúng tôi có đa dạng các sản phẩm như mainboard, CPU, RAM, ổ cứng, card đồ họa, chuột, bàn phím, tai nghe.',
                'facebook' => '111',
                'instagram' => '111',
                'tiktok' => '111',
                'youtube' => '111',
                'category_id' => 4,
            ],
            [
                'name' => 'Cuộn Cảm Dán SMD CDRH127 1280-330 33uH 4.2A',
                'img' => $img.'12.png',
                'description' => $desc,
                'price' => 2800,
                'inventory' => 2000,
                'sort_description' => 'ĐôngNam Shop chuyên cung cấp linh kiện điện tử, phụ kiện máy tính và thiết bị công nghệ uy tín. Chúng tôi có đa dạng các sản phẩm như mainboard, CPU, RAM, ổ cứng, card đồ họa, chuột, bàn phím, tai nghe.',
                'facebook' => '111',
                'instagram' => '111',
                'tiktok' => '111',
                'youtube' => '111',
                'category_id' => 4,
            ],
        ];

        DB::table('products')->insert($products);
    }
}
