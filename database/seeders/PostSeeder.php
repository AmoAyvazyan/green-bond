<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post               = new Post();
        $post->slug         = 'about-program';
        $post->published_at = now();
        $post->is_published = true;
        $post->author_id    = 1;
        $post->image        = asset('images/about_program_image.webp');
        App::setLocale('hy');
        $post->title   = "Ծրագրի մասին";
        $post->content = 'Կանաչ Վարկավորման Ծրագիրը իրականացվում է Ազգային Հիփոթեքային Ընկերության (այսուհետ ԱՀԸ) կողմից Ֆրանսիական Զարգացման Գործակալության (ՖԶԳ) ֆինանսական աջակցությամբ։ Ծրագիրը նպատակ ունի խթանել բնակարանային էնեգաարդյունավետ վերանորոգումը, անհատական բնակելի տների կառուցումը, ինչպես նաև բարձր էներգաարդյունավետության դասի բնակարանների ձեռքբերումը Հայաստանի Հանրապետությունում։ Ծրագիրը, մասնավորապես, թիրախավորում է ցածր և միջին եկամուտով բնակչությանը։
Ծրագրի շրջանակներում ընտրված բանկերը և վարկային կազմակերպությունները տրամադրում եմ միջին և երկարաժամկետ բնակարանային վարկեր։ Որպեսզի վերանորոգման վարկը համարվի կանաչ, վերանորոգման վարկի գումարի նվազագույնը 90%-ը պետք է օգտագործվի էներգաարդյունավետ միջոցառումների վրա։ Անհատական բնակելի տների կառուցման վարկերի դեպքում, առնվազն տան պատերը և տանիքը պետք է ջերմամեկուսացվեն, և էներգաարդյունավետ արտաքին դուռ և պատուհաններ տեղադրվեն, որպեսզի նախագիծը համարվի կանաչ։ Բազմաբնակարան շենքերը պետք է ունենան էներգետիկ անձնագիր և էներգաարդյունավետության առնվազն B դաս, որպեսզի շենքից ձեռքբերվող բնակարանը համարվի կանաչ ներդրում։
Տվյալ գործիքը նախատեսված է ներդրվող նախագծի որակավորման գնահատման համար, ինչպես նաև հաշվելու համար էներգիայի խնայողությունը և արտանետումների կրճատումները։ Գործիքը մշակվել է GOPA AFC GmbH կողից՝ KfW ֆինանսական աջակցությամբ։';
        $post->save();
        App::setLocale('en');
        $post->title   = 'About program';
        $post->content = 'The Green Loan Program is implemented by the National Mortgage Company (NMC) with financial support from the Agence française de développement (AFD). It aims to stimulate energy-efficient renovation of housing, single-family house construction, and the acquisition of apartments with a high energy efficiency label in Armenia. The program particularly targets lower and middle-income populations.
Under the program, selected partner banks and credit organizations provide medium and long-term housing loans. To qualify as green, at least 90% of the renovation loan amount must be spent on energy efficiency measures. For single-family house construction projects, at least the roof and walls of the house must be insulated, and an energy-efficient front door and windows must be installed for the project to be classified as green. Multi-apartment buildings must have an energy passport and an energy efficiency label of at least B for an apartment to qualify as a green investment.
This web-based tool is designed to assess the eligibility of the planned project and calculate corresponding energy and emissions savings. The tool has been developed by GOPA AFC GmbH with financial support from KfW.';
        $post->save();
    }
}