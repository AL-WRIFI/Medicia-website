<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::insert([
            [
                'image_url' => 'https://picsum.photos/400/300?random=1',
                'title' => 'هذا هو عنوان المقالة الأولى ويحتوي على تفاصيل كثيرة ومفصلة',
                'description' => 'هذه هي الوصف التفصيلي الأول. تحتوي المقالة على معلومات كثيرة وشاملة تهدف إلى تقديم نظرة معمقة حول الموضوع الذي تم تناوله في هذه المقالة.',
                'in_home' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_url' => 'https://picsum.photos/400/300?random=2',
                'title' => 'العنوان الثاني يحتوي على كلمات طويلة ومهمة لتوضيح فكرة المقالة',
                'description' => 'هذا الوصف الثاني الذي يتميز بالطول والتفصيل. المقالة الثانية تتناول موضوعًا هامًا وتعطي القارئ فرصة للتعمق في المحتوى المقدم.',
                'in_home' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_url' => 'https://picsum.photos/400/300?random=3',
                'title' => 'العنوان الثالث: مقالة غنية بالمعلومات المفصلة والعناوين الجذابة',
                'description' => 'هذا هو الوصف الخاص بالمقالة الثالثة. في هذه المقالة، سنناقش موضوعًا مثيرًا للاهتمام مع أمثلة عملية ومعلومات شاملة تساعد القارئ.',
                'in_home' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_url' => 'https://picsum.photos/400/300?random=4',
                'title' => 'مقالة رابعة بعناوين تفصيلية تغطي كل الجوانب',
                'description' => 'وصف المقالة الرابعة طويل ومليء بالتفاصيل. هذا المقال يعرض رؤية شاملة وموثوقة حول الموضوع الذي تم اختياره للكتابة عنه.',
                'in_home' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image_url' => 'https://picsum.photos/400/300?random=5',
                'title' => 'العنوان الخامس: تغطية متميزة لموضوع مهم وحديث',
                'description' => 'الوصف الخاص بالمقالة الخامسة يأتي بمعلومات دقيقة ومثيرة للاهتمام. يتميز المقال بالتعمق في الموضوع وإضافة تفاصيل إضافية لجذب القارئ.',
                'in_home' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
