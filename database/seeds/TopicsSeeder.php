<?php

use Illuminate\Database\Seeder;

use App\Topic;

class TopicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /* $knownTopics = ['controller','migration','model','seeder','factory']; */
        /* $unknownTopics = ['channel','command','exception','job','listener','notification', 'observer']; */
        $topic = new Topic();

        $topic->insert([
            array('name' => 'Controller',
                'known' => '1'
            ),
            array('name' => 'Migration',
                'known' => '1'
            ),
            array('name' => 'Model',
                'known' => '1'
            ),
            array('name' => 'Seeder',
                'known' => '1'
            ),
            array('name' => 'Factory',
                'known' => '1'
            ),
            array('name' => 'Channel',
                'known' => '0'
            ),
            array('name' => 'Command',
                'known' => '0'
            ),
            array('name' => 'Exception',
                'known' => '0'
            ),
            array('name' => 'Job',
                'known' => '0'
            ),
            array('name' => 'Listener',
                'known' => '0'
            ),
            array('name' => 'Notification',
                'known' => '0'
            ),
            array('name' => 'Observer',
                'known' => '0'
            ),
            array('name' => 'Scope',
                'known' => '1'
            ),
            array('name' => 'Mass Assignment',
                'known' => '1'
            ),
            array('name' => 'Basic relationships (hasMany <-> BelongsTo)',
                'known' => '1'
            ),
            array('name' => 'Accesors and mutators',
                'known' => '1'
            ),
            array('name' => 'Mailables',
                'known' => '1'
            ),
            array('name' => 'So much more',
                'known' => '0'
            )
        ]);
    }
}
