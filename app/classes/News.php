<?php

namespace App\classes;

class News
{
    public $news = [];

    public function __construct()
    {
        $this->news = [
            0 => [
                'id' => 1,
                'image' => 'item1.jpg',
                'heading' => 'UK should use new powers to probe Apple-Google mobile browser duopoly, report says',
                'date' => '24/11/24',
                'textp' => "LONDON, Nov 22 (Reuters) - Apple (AAPL.O), opens new tab could be holding back innovation in smartphone browsers, according to a British regulatory report, which recommended that Apple's and Google's duopoly in mobile ecosystems should be investigated with its new powers.The Competition and Markets Authority (CMA) said on Friday its inquiry group had provisionally found that the mobile browser market was not working well for UK businesses and millions of phone users.
The group's biggest concerns related to Apple's policies on accessing the web on iPhones. It provisionally found Apple's rules restricted competitors from being able to deliver new features that could benefit consumers.
It said many smaller British app developers wanted to use progressive web apps – an alternative way to provide apps to users without downloading them through an app store – but the technology was not able to fully take off on Apple's devices.
A revenue-sharing agreement between Google and Apple had also reduced their incentives to compete in mobile browsers on Apple devices, it found.
The CMA's Digital Markets Unit, set up more than three years ago, has gained new powers to tackle the power of big tech companies with interventions in the market. The new regime is expected to come into force in January.",
                'button' => 'Read More'
            ],
            1 => [
                'id' => 2,
                'image' => 'item2.jpg',
                'heading' => 'Samsung ordered to pay $118 million for infringing Netlist patents',
                'date' => '24/11/24',
                'textp' => "Nov 22 (Reuters) - A federal jury in Marshall, Texas, on Friday awarded computer memory company Netlist (NLST.PK), opens new tab$118 million in damages, opens new tab from Samsung Electronics (005930.KS), opens new tab in a patent lawsuit over technology for improving data processing in high-performance memory products.
The verdict follows a $303 million verdict against Samsung for Irvine, California-based Netlist in a related case last year.
Netlist also won $445 million from chipmaker Micron in May in a separate lawsuit over some of the same patents.
Spokespeople for Samsung and Netlist did not immediately respond to requests for comment on the Friday verdict. The jury also determined that Samsung's infringement was willful, which could lead to a judge increasing the award by up to three times.
Netlist sued Samsung in 2022, alleging that the Korean tech giant's memory modules used in cloud computing servers and other data-intensive technology infringed its patents. Netlist said its innovations increase the power efficiency of memory modules and enable users to derive useful information from vast amounts of data in a shorter period.
Samsung denied the allegations, arguing that the patents were invalid and that its technology worked differently than Netlist's inventions.",
                'button' => 'Read More'
            ],
            2 => [
                'id' => 3,
                'image' => 'item3.jpg',
                'heading' => 'Amazon doubles down on AI startup Anthropic with another $4 bln',
                'date' => '24/11/24',
                'textp' => "Nov 22 (Reuters) - Amazon.com (AMZN.O), opens new tab pumped another $4 billion into OpenAI competitor Anthropic, as the e-commerce giant goes up against Big Tech rivals in a race to capitalize on generative artificial intelligence technology.
This doubles Amazon's investment in the firm known for its GenAI chatbot Claude, but it remains a minority investor, the startup said on Friday. Similar to Amazon's previous $4 billion investment, it comes in the form of convertible notes and comes in phases, first at $1.3 billion.
Anthropic is also in talks with additional investors to raise more capital on the back of Amazon backing, sources added, who requested anonymity for discussing private matters. Anthropic declined to comment.
Amazon, which has gradually established itself as Anthropic's primary cloud partner, is fiercely competing with Microsoft (MSFT.O), opens new tab and Alphabet's Google (GOOGL.O), opens new tab to offer AI-powered tools for its cloud customers. AWS is bringing significant revenue to Anthropic as a major distributor of its latest models.
The investment in Anthropic is essential for Amazon to stay in a leadership position in AI, said D.A. Davidson analyst Gil Luria.",
                'button' => 'Read More'
            ],
            3 => [
                'id' => 4,
                'image' => 'item4.jpg',
                'heading' => 'Bitcoin at record highs, sets sights on $100,000',
                'date' => '24/11/24',
                'textp' => "NEW YORK/LONDON, Nov 22 (Reuters) - Bitcoin touched a record high on Friday, with its sights set firmly on the $100,000 barrier, in a stellar rally for the cryptocurrency sparked by expectations of a more friendly regulatory environment under a Donald Trump administration.
It has more than doubled in value this year and is up about 45% since Trump's sweeping election victory on Nov. 5, when voters also elected a slew of pro-crypto lawmakers to Congress.
The cryptocurrency's gains, however, were more measured on Friday. After touching a fresh record high above $99,800 , bitcoin pulled back a touch to trade up 1.33% on the day, around $99,383.
Still, the momentum for further gains appeared strong with bitcoin poised for a third straight week of plus-10% gains. It was also on track for its best monthly performance since February.
Its surge has made bitcoin one of the standout winners of so-called Trump trades - assets that are seen as winning or losing from the Republican president's policies.
The cryptocurrency also appears on the cusp of mainstream acceptance since its creation 16 years ago.
The longer it survives it is taken more seriously, that's just the reality of things, said Shane Oliver, chief economist and head of investment strategy at AMP Sydney.
As an economist and investor I find it very hard to value it ... it's anyone's guess. But it does have a momentum aspect to it and at the moment the momentum is up.",
                'button' => 'Read More'
            ],

        ];
    }

    public function getNews()
    {
        return $this->news;
    }

    public function getSingleNews($newsId)
    {
        foreach ($this->news as $newes) {
            if ($newes['id'] == $newsId) {
                return $newes;
            }
        }
    }
}
