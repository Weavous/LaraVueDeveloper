<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Hobby;

class HobbySeeder extends Seeder
{
    private $data = [
        [
            "name" => "3D printing"
        ],
        [
            "name" => "Acroyoga"
        ],
        [
            "name" => "Acting"
        ],
        [
            "name" => "Aerial silk"
        ],
        [
            "name" => "Airbrushing"
        ],
        [
            "name" => "Amateur radio"
        ],
        [
            "name" => "Animation"
        ],
        [
            "name" => "Anime"
        ],
        [
            "name" => "Aquascaping"
        ],
        [
            "name" => "Art"
        ],
        [
            "name" => "Astrology"
        ],
        [
            "name" => "Baking"
        ],
        [
            "name" => "Baton twirling"
        ],
        [
            "name" => "Beatboxing"
        ],
        [
            "name" => "Beer tasting"
        ],
        [
            "name" => "Binge-watching"
        ],
        [
            "name" => "Blogging"
        ],
        [
            "name" => "Board/tabletop games"
        ],
        [
            "name" => "Book discussion clubs"
        ],
        [
            "name" => "Book restoration"
        ],
        [
            "name" => "Bowling"
        ],
        [
            "name" => "Brazilian jiu-jitsu"
        ],
        [
            "name" => "Breadmaking"
        ],
        [
            "name" => "Bullet journaling"
        ],
        [
            "name" => "Calligraphy"
        ],
        [
            "name" => "Candle making"
        ],
        [
            "name" => "Candy making"
        ],
        [
            "name" => "Car fixing & building"
        ],
        [
            "name" => "Card games"
        ],
        [
            "name" => "Cardistry"
        ],
        [
            "name" => "Ceramics"
        ],
        [
            "name" => "Chatting"
        ],
        [
            "name" => "Cheesemaking"
        ],
        [
            "name" => "Chess"
        ],
        [
            "name" => "Cleaning"
        ],
        [
            "name" => "Clothesmaking"
        ],
        [
            "name" => "Coffee roasting"
        ],
        [
            "name" => "Collecting"
        ],
        [
            "name" => "Coloring"
        ],
        [
            "name" => "Communication"
        ],
        [
            "name" => "Community activism"
        ],
        [
            "name" => "Computer programming"
        ],
        [
            "name" => "Confectionery"
        ],
        [
            "name" => "Conlanging"
        ],
        [
            "name" => "Construction"
        ],
        [
            "name" => "Cooking"
        ],
        [
            "name" => "Cosplaying"
        ],
        [
            "name" => "Couch surfing"
        ],
        [
            "name" => "Couponing"
        ],
        [
            "name" => "Craft"
        ],
        [
            "name" => "Creative writing"
        ],
        [
            "name" => "Crocheting"
        ],
        [
            "name" => "Cross-stitch"
        ],
        [
            "name" => "Crossword puzzles"
        ],
        [
            "name" => "Cryptography"
        ],
        [
            "name" => "Cue sports"
        ],
        [
            "name" => "Dance"
        ],
        [
            "name" => "Decorating"
        ],
        [
            "name" => "Digital arts"
        ],
        [
            "name" => "Dining"
        ],
        [
            "name" => "Diorama"
        ],
        [
            "name" => "Distro Hopping"
        ],
        [
            "name" => "Diving"
        ],
        [
            "name" => "Djembe"
        ],
        [
            "name" => "DJing"
        ],
        [
            "name" => "Do it yourself"
        ],
        [
            "name" => "Drama"
        ],
        [
            "name" => "Drawing"
        ],
        [
            "name" => "Drink mixing"
        ],
        [
            "name" => "Electronic games"
        ],
        [
            "name" => "Electronics"
        ],
        [
            "name" => "Embroidery"
        ],
        [
            "name" => "Engraving"
        ],
        [
            "name" => "Entertaining"
        ],
        [
            "name" => "Experimenting"
        ],
        [
            "name" => "Fantasy sports"
        ],
        [
            "name" => "Fashion"
        ],
        [
            "name" => "Fashion design"
        ],
        [
            "name" => "Feng shui decorating"
        ],
        [
            "name" => "Filmmaking"
        ],
        [
            "name" => "Fingerpainting"
        ],
        [
            "name" => "Fishfarming"
        ],
        [
            "name" => "Fishkeeping"
        ],
        [
            "name" => "Flower arranging"
        ],
        [
            "name" => "Fly tying"
        ],
        [
            "name" => "Foreign language learning"
        ],
        [
            "name" => "Furniture building"
        ],
        [
            "name" => "Gaming (tabletop games, role-playing games,"
        ],
        [
            "name" => "Genealogy"
        ],
        [
            "name" => "Gingerbread house making"
        ],
        [
            "name" => "Giving advice"
        ],
        [
            "name" => "Glassblowing"
        ],
        [
            "name" => "Gardening"
        ],
        [
            "name" => "Gongfu tea"
        ],
        [
            "name" => "Graphic design"
        ],
        [
            "name" => "Gunsmithing"
        ],
        [
            "name" => "Hacking"
        ],
        [
            "name" => "Hardware"
        ],
        [
            "name" => "Herp keeping"
        ],
        [
            "name" => "Home improvement"
        ],
        [
            "name" => "Homebrewing"
        ],
        [
            "name" => "Houseplant care"
        ],
        [
            "name" => "Hula hooping"
        ],
        [
            "name" => "Humor"
        ],
        [
            "name" => "Hydroponics"
        ],
        [
            "name" => "Ice skating"
        ],
        [
            "name" => "Inventing"
        ],
        [
            "name" => "Jewelry making"
        ],
        [
            "name" => "Jigsaw puzzles"
        ],
        [
            "name" => "Journaling"
        ],
        [
            "name" => "Juggling"
        ],
        [
            "name" => "Karaoke"
        ],
        [
            "name" => "Karate"
        ],
        [
            "name" => "Kendama"
        ],
        [
            "name" => "Knife making"
        ],
        [
            "name" => "Knitting"
        ],
        [
            "name" => "Knot tying"
        ],
        [
            "name" => "Kombucha brewing"
        ],
        [
            "name" => "Kung fu"
        ],
        [
            "name" => "Lace making"
        ],
        [
            "name" => "Lapidary"
        ],
        [
            "name" => "Leather crafting"
        ],
        [
            "name" => "Lego building"
        ],
        [
            "name" => "Livestreaming"
        ],
        [
            "name" => "Listening to music"
        ],
        [
            "name" => "Listening to podcasts"
        ],
        [
            "name" => "Lock picking"
        ],
        [
            "name" => "Machining"
        ],
        [
            "name" => "Macrame"
        ],
        [
            "name" => "Magic"
        ],
        [
            "name" => "Makeup"
        ],
        [
            "name" => "Manga"
        ],
        [
            "name" => "Massaging"
        ],
        [
            "name" => "Mazes (indoor/outdoor)"
        ],
        [
            "name" => "Mechanics"
        ],
        [
            "name" => "Meditation"
        ],
        [
            "name" => "Memory training"
        ],
        [
            "name" => "Metalworking"
        ],
        [
            "name" => "Miniature art"
        ],
        [
            "name" => "Minimalism"
        ],
        [
            "name" => "Model building"
        ],
        [
            "name" => "Modeling"
        ],
        [
            "name" => "Model engineering"
        ],
        [
            "name" => "Music"
        ],
        [
            "name" => "Nail art"
        ],
        [
            "name" => "Needlepoint"
        ],
        [
            "name" => "Origami"
        ],
        [
            "name" => "Painting"
        ],
        [
            "name" => "Palmistry"
        ],
        [
            "name" => "Pen Spinning"
        ],
        [
            "name" => "Performance"
        ],
        [
            "name" => "Pet"
        ],
        [
            "name" => "Pet adoption & fostering"
        ],
        [
            "name" => "Pet sitting"
        ],
        [
            "name" => "Philately"
        ],
        [
            "name" => "Photography"
        ],
        [
            "name" => "Pilates"
        ],
        [
            "name" => "Planning"
        ],
        [
            "name" => "Plastic art"
        ],
        [
            "name" => "Playing musical instruments"
        ],
        [
            "name" => "Poetry"
        ],
        [
            "name" => "Poi"
        ],
        [
            "name" => "Pole dancing"
        ],
        [
            "name" => "Postcrossing"
        ],
        [
            "name" => "Pottery"
        ],
        [
            "name" => "Power Nap"
        ],
        [
            "name" => "Practical jokes"
        ],
        [
            "name" => "Pressed flower craft"
        ],
        [
            "name" => "Proofreading and editing"
        ],
        [
            "name" => "Proverbs"
        ],
        [
            "name" => "Public speaking"
        ],
        [
            "name" => "Puppetry"
        ],
        [
            "name" => "Puzzles"
        ],
        [
            "name" => "Pyrography"
        ],
        [
            "name" => "Quilling"
        ],
        [
            "name" => "Quilting"
        ],
        [
            "name" => "Quizzes"
        ],
        [
            "name" => "Radio-controlled model playing"
        ],
        [
            "name" => "Rail transport modeling"
        ],
        [
            "name" => "Rapping"
        ],
        [
            "name" => "Reading"
        ],
        [
            "name" => "Recipe creation"
        ],
        [
            "name" => "Refinishing"
        ],
        [
            "name" => "Reiki"
        ],
        [
            "name" => "Reviewing Gadgets"
        ],
        [
            "name" => "Robot combat"
        ],
        [
            "name" => "Rubik's Cube"
        ],
        [
            "name" => "Scrapbooking"
        ],
        [
            "name" => "Scuba Diving"
        ],
        [
            "name" => "Sculpting"
        ],
        [
            "name" => "Sewing"
        ],
        [
            "name" => "Shoemaking"
        ],
        [
            "name" => "Singing"
        ],
        [
            "name" => "Sketching"
        ],
        [
            "name" => "Skipping rope"
        ],
        [
            "name" => "Slot car"
        ],
        [
            "name" => "Soapmaking"
        ],
        [
            "name" => "Social media"
        ],
        [
            "name" => "Spreadsheets"
        ],
        [
            "name" => "Stamp collecting"
        ],
        [
            "name" => "Stand-up comedy"
        ],
        [
            "name" => "Storytelling"
        ],
        [
            "name" => "Stripping"
        ],
        [
            "name" => "Sudoku"
        ],
        [
            "name" => "Talking"
        ],
        [
            "name" => "Tapestry"
        ],
        [
            "name" => "Tarot"
        ],
        [
            "name" => "Tatebanko"
        ],
        [
            "name" => "Tattooing"
        ],
        [
            "name" => "Taxidermy"
        ],
        [
            "name" => "Telling jokes"
        ],
        [
            "name" => "Thrifting"
        ],
        [
            "name" => "Upcycling"
        ],
        [
            "name" => "Video editing"
        ],
        [
            "name" => "Video game developing"
        ],
        [
            "name" => "Video gaming"
        ],
        [
            "name" => "Video making"
        ],
        [
            "name" => "VR Gaming"
        ],
        [
            "name" => "Wargaming"
        ],
        [
            "name" => "Watch making"
        ],
        [
            "name" => "Watching documentaries"
        ],
        [
            "name" => "Watching movies"
        ],
        [
            "name" => "Watching television"
        ],
        [
            "name" => "Wax sealing"
        ],
        [
            "name" => "Waxing"
        ],
        [
            "name" => "Weaving"
        ],
        [
            "name" => "Webtooning"
        ],
        [
            "name" => "Weight training"
        ],
        [
            "name" => "Welding"
        ],
        [
            "name" => "Whisky"
        ],
        [
            "name" => "Whittling"
        ],
        [
            "name" => "Wikipedia editing"
        ],
        [
            "name" => "Wine tasting"
        ],
        [
            "name" => "Winemaking"
        ],
        [
            "name" => "Witchcraft"
        ],
        [
            "name" => "Wood carving"
        ],
        [
            "name" => "Woodworking"
        ],
        [
            "name" => "Word searches"
        ],
        [
            "name" => "Worldbuilding"
        ],
        [
            "name" => "Writing"
        ],
        [
            "name" => "Writing music"
        ],
        [
            "name" => "Yo-yoing"
        ],
        [
            "name" => "Yoga"
        ],
        [
            "name" => "Zumba"
        ],
        [
            "name" => "Outdoors and Sports"
        ],
        [
            "name" => "Air sports"
        ],
        [
            "name" => "Airsoft"
        ],
        [
            "name" => "Amateur geology"
        ],
        [
            "name" => "Amusement park visiting"
        ],
        [
            "name" => "Archery"
        ],
        [
            "name" => "Auto detailing"
        ],
        [
            "name" => "Automobilism"
        ],
        [
            "name" => "Astronomy"
        ],
        [
            "name" => "Backpacking"
        ],
        [
            "name" => "Badminton"
        ],
        [
            "name" => "BASE jumping"
        ],
        [
            "name" => "Baseball"
        ],
        [
            "name" => "Basketball"
        ],
        [
            "name" => "Beachcombing"
        ],
        [
            "name" => "Beekeeping"
        ],
        [
            "name" => "Birdwatching"
        ],
        [
            "name" => "Blacksmithing"
        ],
        [
            "name" => "BMX"
        ],
        [
            "name" => "Board sports"
        ],
        [
            "name" => "Bodybuilding"
        ],
        [
            "name" => "Bonsai"
        ],
        [
            "name" => "Butterfly watching"
        ],
        [
            "name" => "Bus riding"
        ],
        [
            "name" => "Camping"
        ],
        [
            "name" => "Canoeing"
        ],
        [
            "name" => "Canyoning"
        ],
        [
            "name" => "Car riding"
        ],
        [
            "name" => "Car tuning"
        ],
        [
            "name" => "Caving"
        ],
        [
            "name" => "City trip"
        ],
        [
            "name" => "Climbing"
        ],
        [
            "name" => "Composting"
        ],
        [
            "name" => "Croquet"
        ],
        [
            "name" => "Cycling"
        ],
        [
            "name" => "Dandyism"
        ],
        [
            "name" => "Dog training"
        ],
        [
            "name" => "Dog walking"
        ],
        [
            "name" => "Dowsing"
        ],
        [
            "name" => "Driving"
        ],
        [
            "name" => "Farming"
        ],
        [
            "name" => "Fishing"
        ],
        [
            "name" => "Flag football"
        ],
        [
            "name" => "Flower growing"
        ],
        [
            "name" => "Flying"
        ],
        [
            "name" => "Flying disc"
        ],
        [
            "name" => "Flying model planes"
        ],
        [
            "name" => "Foraging"
        ],
        [
            "name" => "Fossicking"
        ],
        [
            "name" => "Freestyle football"
        ],
        [
            "name" => "Fruit picking"
        ],
        [
            "name" => "Gardening"
        ],
        [
            "name" => "Geocaching"
        ],
        [
            "name" => "Ghost hunting"
        ],
        [
            "name" => "Gold prospecting"
        ],
        [
            "name" => "Graffiti"
        ],
        [
            "name" => "Groundhopping"
        ],
        [
            "name" => "Guerrilla gardening"
        ],
        [
            "name" => "Gymnastics"
        ],
        [
            "name" => "Handball"
        ],
        [
            "name" => "Herbalism"
        ],
        [
            "name" => "Herping"
        ],
        [
            "name" => "High-power rocketry"
        ],
        [
            "name" => "Hiking"
        ],
        [
            "name" => "Hobby horsing"
        ],
        [
            "name" => "Hobby tunneling"
        ],
        [
            "name" => "Hooping"
        ],
        [
            "name" => "Horseback riding"
        ],
        [
            "name" => "Hunting"
        ],
        [
            "name" => "Inline skating"
        ],
        [
            "name" => "Jogging"
        ],
        [
            "name" => "Jumping rope"
        ],
        [
            "name" => "Karting"
        ],
        [
            "name" => "Kayaking"
        ],
        [
            "name" => "Kite flying"
        ],
        [
            "name" => "Kitesurfing"
        ],
        [
            "name" => "Lacrosse"
        ],
        [
            "name" => "LARPing"
        ],
        [
            "name" => "Letterboxing"
        ],
        [
            "name" => "Lomography"
        ],
        [
            "name" => "Longboarding"
        ],
        [
            "name" => "Martial arts"
        ],
        [
            "name" => "Metal detecting"
        ],
        [
            "name" => "Motorcycling"
        ],
        [
            "name" => "Meteorology"
        ],
        [
            "name" => "Motor sports"
        ],
        [
            "name" => "Mountain biking"
        ],
        [
            "name" => "Mountaineering"
        ],
        [
            "name" => "Museum visiting"
        ],
        [
            "name" => "Mushroom hunting/mycology"
        ],
        [
            "name" => "Netball"
        ],
        [
            "name" => "Noodling"
        ],
        [
            "name" => "Nordic skating"
        ],
        [
            "name" => "Orienteering"
        ],
        [
            "name" => "Paintball"
        ],
        [
            "name" => "Paragliding"
        ],
        [
            "name" => "Parkour"
        ],
        [
            "name" => "Photography"
        ],
        [
            "name" => "Pickleball"
        ],
        [
            "name" => "Picnicking"
        ],
        [
            "name" => "Podcast hosting"
        ],
        [
            "name" => "Polo"
        ],
        [
            "name" => "Powerlifting"
        ],
        [
            "name" => "Public transport riding"
        ],
        [
            "name" => "Qigong"
        ],
        [
            "name" => "Radio-controlled model playing"
        ],
        [
            "name" => "Rafting"
        ],
        [
            "name" => "Railway journeys"
        ],
        [
            "name" => "Rappelling"
        ],
        [
            "name" => "Renaissance fair"
        ],
        [
            "name" => "Renovating"
        ],
        [
            "name" => "Road biking"
        ],
        [
            "name" => "Rock climbing"
        ],
        [
            "name" => "Rock painting"
        ],
        [
            "name" => "Roller skating"
        ],
        [
            "name" => "Rugby"
        ],
        [
            "name" => "Running"
        ],
        [
            "name" => "Safari"
        ],
        [
            "name" => "Sailing"
        ],
        [
            "name" => "Sand art"
        ],
        [
            "name" => "Scouting"
        ],
        [
            "name" => "Scuba diving"
        ],
        [
            "name" => "Sculling or rowing"
        ],
        [
            "name" => "Shooting"
        ],
        [
            "name" => "Shopping"
        ],
        [
            "name" => "Shuffleboard"
        ],
        [
            "name" => "Skateboarding"
        ],
        [
            "name" => "Skiing"
        ],
        [
            "name" => "Skimboarding"
        ],
        [
            "name" => "Skydiving"
        ],
        [
            "name" => "Slacklining"
        ],
        [
            "name" => "Sledding"
        ],
        [
            "name" => "Snorkeling"
        ],
        [
            "name" => "Snowboarding"
        ],
        [
            "name" => "Snowmobiling"
        ],
        [
            "name" => "Snowshoeing"
        ],
        [
            "name" => "Soccer"
        ],
        [
            "name" => "Stone skipping"
        ],
        [
            "name" => "Storm chasing"
        ],
        [
            "name" => "Sun bathing"
        ],
        [
            "name" => "Surfing"
        ],
        [
            "name" => "Survivalism"
        ],
        [
            "name" => "Swimming"
        ],
        [
            "name" => "Table tennis playing"
        ],
        [
            "name" => "Taekwondo"
        ],
        [
            "name" => "Tai chi"
        ],
        [
            "name" => "Tennis"
        ],
        [
            "name" => "Thru-hiking"
        ],
        [
            "name" => "Topiary"
        ],
        [
            "name" => "Tourism"
        ],
        [
            "name" => "Trade fair visiting"
        ],
        [
            "name" => "Travel"
        ],
        [
            "name" => "Unicycling"
        ],
        [
            "name" => "Urban exploration"
        ],
        [
            "name" => "Vacation"
        ],
        [
            "name" => "Vegetable farming"
        ],
        [
            "name" => "Vehicle restoration"
        ],
        [
            "name" => "Videography"
        ],
        [
            "name" => "Volunteering"
        ],
        [
            "name" => "Walking"
        ],
        [
            "name" => "Water sports"
        ],
        [
            "name" => "Zoo visiting"
        ],
        [
            "name" => "Educational hobbies"
        ],
        [
            "name" => "Archaeology"
        ],
        [
            "name" => "Astronomy"
        ],
        [
            "name" => "Biology"
        ],
        [
            "name" => "Botany"
        ],
        [
            "name" => "Business"
        ],
        [
            "name" => "Chemistry"
        ],
        [
            "name" => "Electrochemistry"
        ],
        [
            "name" => "English"
        ],
        [
            "name" => "Entrepreneurship"
        ],
        [
            "name" => "Geography"
        ],
        [
            "name" => "History"
        ],
        [
            "name" => "Mathematics"
        ],
        [
            "name" => "Medical science"
        ],
        [
            "name" => "Microbiology"
        ],
        [
            "name" => "Mycology"
        ],
        [
            "name" => "Philosophy"
        ],
        [
            "name" => "Physics"
        ],
        [
            "name" => "Psychology"
        ],
        [
            "name" => "Railway studies"
        ],
        [
            "name" => "Research"
        ],
        [
            "name" => "Science and technology studies"
        ],
        [
            "name" => "Social studies"
        ],
        [
            "name" => "Sociology"
        ],
        [
            "name" => "Sports science"
        ],
        [
            "name" => "Life Science"
        ],
        [
            "name" => "Teaching"
        ],
        [
            "name" => "Web design"
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data as $key => $hobby) {
            Hobby::create($hobby);
        }
    }
}
