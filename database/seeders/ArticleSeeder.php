<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Writer;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $categories = Category::all();
        $writers = Writer::all();

        $courseTopics = [
            'Data Science' => [
                'Machine Learning Fundamentals',
                'Deep Learning Basics',
                'Natural Language Processing',
                'Data Visualization',
                'Statistical Analysis',
            ],
            'Network Security' => [
                'Software Security Essentials',
                'Network Administration',
                'Popular Network Technology',
                'Cybersecurity Basics',
                'Ethical Hacking',
            ],
            'Interactive Multimedia' => [
                'Human and Computer Interaction',
                'User Experience Design',
                'Digital Immersive Technology',
                'Multimedia Development',
                'Interactive Design',
            ],
            'Software Engineering' => [
                'Pattern Software Design',
                'Agile Software Development',
                'Code Reengineering',
                'Software Testing',
                'Project Management',
            ],
        ];

        foreach ($categories as $category) {
            $topics = $courseTopics[$category->name];
            
            foreach ($topics as $topic) {
                $title = $topic;
                Article::create([
                    'title' => $title,
                    'slug' => Str::slug($title),
                    'content' => $this->generateArticleContent($faker),
                    'category_id' => $category->id,
                    'writer_id' => $writers->random()->id,
                    'views' => $faker->numberBetween(50, 1000),
                    'created_at' => $faker->dateTimeBetween('-6 months', 'now'),
                ]);
            }
        }
    }

    private function generateArticleContent($faker)
    {
        $content = "<h2>Course Overview</h2>\n";
        $content .= "<p>" . $faker->paragraph(3) . "</p>\n\n";
        
        $content .= "<h3>Learning Objectives</h3>\n<ul>";
        for ($i = 0; $i < 4; $i++) {
            $content .= "<li>" . $faker->sentence() . "</li>";
        }
        $content .= "</ul>\n\n";

        $content .= "<h3>Course Content</h3>\n";
        $content .= "<p>" . $faker->paragraph(4) . "</p>\n\n";

        $content .= "<h3>Prerequisites</h3>\n<ul>";
        for ($i = 0; $i < 3; $i++) {
            $content .= "<li>" . $faker->sentence() . "</li>";
        }
        $content .= "</ul>\n\n";

        $content .= "<h3>What You'll Learn</h3>\n";
        $content .= "<p>" . $faker->paragraph(3) . "</p>\n\n";

        return $content;
    }
}