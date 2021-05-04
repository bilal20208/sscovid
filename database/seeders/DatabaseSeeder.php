<?php

namespace Database\Seeders;

use App\Models\Covidnews;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $news = array(
            array('id' => '1','name' => 'Coronavirus is Very dangerous','discription' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look','img' => 'images/news-img.png'),
            array('id' => '2','name' => 'In Memoriam: Healthcare Workers Who Have Died of COVID-19','discription' => 'Healthcare workers are on the front lines of the global effort to care for patients with COVID-19, while putting themselves at risk for infection. Thousands have already died, from dozens of countries, professions, and specialties. Here we honor them all.
          
          Physicians, nurses, assistants, technicians, orderlies, administrators, volunteers, drivers, porters, EMTs, firefighters, and more — fresh on the job or retired — they are all remembered here. In some cases, we include names of people who did not die from COVID-19, but whose deaths were clearly related to the stress and demands of the pandemic.','img' => 'images/death_corona.jpg'),
            array('id' => '3','name' => 'Japan\'s Olympic \'host towns\' see big plans wrecked by coronavirus','discription' => 'Once-in-a-lifetime cultural and sporting events have been put on hold as towns and cities remain unsure about whether they will be able to welcome foreign athletes — including those from Germany.','img' => 'images/jaban.jpg'),
            array('id' => '4','name' => 'India\'s neighbors on alert for \'double mutant\' COVID variant
          ','discription' => 'Countries in South Asia are watching out for a potentially more infectious coronavirus variant crossing the border from India. COVID-19 case numbers are currently rising in several countries.
          
          ','img' => 'images/india.jpeg'),
            array('id' => '5','name' => 'Bolsonaro criticized as Brazil tops 400,000 COVID-19 deaths
          ','discription' => 'Though the rate of coronavirus infections is slowing down, April was Brazil\'s deadliest month so far. The vaccine rollout is also lagging because Jair Bolsonaro\'s government has been slow to buy vaccines.
          
          ','img' => 'images/baraz.jpg'),
            array('id' => '6','name' => 'India\'s COVID \'inferno\': Why is the second surge happening now?
          ','discription' => 'A sluggish vaccine rollout, virus variants, mass gatherings and complacency have created the perfect storm in India, say experts.
          Hospitals scrambling for oxygen, people waiting for ambulances that never arrive, crematoriums running out of space.
          ','img' => 'images/sa.jpg')
          );
        foreach($news as $new){
            Covidnews::create($new);
        }
    }
}
