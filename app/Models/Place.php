<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Place {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Cao Cao',
            'age' => '65 - year - old',
            'countries' => 'wei',
            'description' => 'Cao Cao, emperor Wudi of The Wei Dynasty (155-220), was born at Qiao County in Peiguo (now In Bozhou city, Anhui Province).An outstanding statesman, strategist, writer, calligrapher and poet in ancient China.The prime minister of the late Eastern Han Dynasty, son of Taiwei commander Cao Song, was the founder of the cao Wei regime.',
            'achievements' => 'To implement the system of farming land;Unify the central Plains and the north;Lay the foundation of the cao Wei regime.',
            'image' => 'caochao.jpg',
        ],
        '2' => [
            'id' => 2,
            'name' => 'Dian wei',
            'age' => '37 - year - old',
            'countries' => 'wei',
            'description' => 'Dian wei (?-197), born in today is Jiwu Village, Ningling County, Shangqiu City, Henan Province.Zeng raised the flag with one hand.Later, he turned to Cao Cao and was enlisted in the army during Cao Cao is campaign against Lv Bu. He performed valor and was honored as an army lieutenant and a regular garrison commander.In the second year of Jian an (197), Zhang Xiu rebelled against Cao Cao. To protect Cao Cao, Dian Wei led more than ten men against the rebels and killed many of them. However, as he was outnumbered, he died in battle.',
            'achievements' => 'The battle of Puyang repelled Lu Bu and Wan Cheng to resist Zhang Xiu.',
            'image' => 'dianwei.jpg',
        ],
        '3' => [
            'id' => 3,
            'name' => 'Liu bei',
            'age' => '62 - year - old',
            'countries' => 'shu',
            'description' => 'Liu Bei (161-223 June 10), styled Xuande, was born in Zhuozhou city, Hebei Province. He was the first emperor and statesman of Shu Han after Liu Sheng, king of Jing in Zhongshan in the Western Han Dynasty.Historians call him the first Lord.Liu Bei was magnum opus, knew people to treat people, and was unyielding. Before his death, the behavior that the whole country entrusted Zhuge Liang to him was praised by Chen Shou as the great course of the past and the present. Numerous literary and artistic works of later generations took Liu Bei as the leading role.Chengdu Wuhou Temple zhaoli temple as a memorial.',
            'achievements' => 'Capture two chuan, establish Shu Han, against Cao Cao.',
            'image' => 'liubei.jpg',
        ],
        '4' => [
            'id' => 4,
            'name' => 'zhaoyun',
            'age' => '72 - year - old',
            'countries' => 'shu',
            'description' => 'Zhaoyun (?-229), styled Zilong, a native of Zhending, Changshan.He is eight feet long and handsome. He was a general of Shu Han during The Three Kingdoms Period.At the end of the han dynasty, warlords fought each other, zhaoyun was elected by the county, led by righteousness from joining gongsun zan.During this period, I got acquainted with liu bei, the emperor of han dynasty, but soon after, zhaoyun left because of the death of his brother.About seven years after leaving gongsun zan, he met liu bei in yecheng and followed liu bei ever since.',
            'achievements' => 'Two help young Lord, sweep Xichuan, Hanshui war.',
            'image' => 'zhaoziyun.jpg',
        ],
        '5' => [
            'id' => 5,
            'name' => 'yuanshao',
            'age' => '49 - year - old',
            'countries' => 'wu',
            'description' => 'Lombardi (?- June 28, 202), Zi Benchu, shangshui County, Henan Province.Late Eastern Han Dynasty warlord, one of the han dynasty.',
            'achievements' => 'Unified Hebei and became the strongest vassal at the end of the Han Dynasty.Hebei government wide, the people of virtue.',
            'image' => 'yuanshao.jpg',
        ],
        '6' => [
            'id' => 6,
            'name' => 'Zhou yu',
            'age' => '35 - year - old',
            'countries' => 'wu',
            'description' => 'Zhou Yu (175-210), styled Gongjin, was born in Lujiang, Anhui province.He was a general of the late Eastern Han Dynasty, born in the Family of Zhou of Lujiang, the son of Ling Zhou yi of Luoyang, his grandfather Zhou Jing and his uncle Zhou Zhong.Chang Zhuang appearance, fine melody, Jiangdong has "qu Error, Zhou Lang Gu" language.',
            'achievements' => 'Assisted Sun Ce in subduing Jiangdong, defeated Cao Cao in Chibi, defeated Cao Ren in Nanjun, and put forward the plan of conquering Yizhou.',
            'image' => 'zhouyu.jpg',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}
