<?php
// 日本語言語ファイル
$translations = [
    'title' => 'モバイルバッテリー稼働時間計算機',
    'labels' => [
        'capacity' => 'モバイルバッテリー容量 (mAh):',
        'voltage' => 'モバイルバッテリー出力電圧 (V):',
        'power' => '機器の消費電力 (W):',
        'efficiency' => 'モバイルバッテリー効率 (%):'
    ],
    'placeholders' => [
        'capacity' => '例: 10000',
        'voltage' => '例: 5',
        'power' => '例: 5',
        'efficiency' => '例: 85'
    ],
    'calculateButton' => '計算する',
    'resultHeading' => '結果:',
    'infoHeading' => '計算に関する注意事項:',
    'resultTexts' => [
        'runtime' => '{capacity} mAhのモバイルバッテリーで、{power}ワットの機器を約{hours}時間{minutes}分使用できます。',
        'totalHours' => 'これは約{hours}時間に相当します。',
        'energyContent' => 'お使いのモバイルバッテリーの利用可能なエネルギー量は約{energy}ワット時 (Wh) です。'
    ],
    'infoItems' => [
        '実際の稼働時間は様々な要因（温度、バッテリーの経年劣化など）により異なる場合があります。',
        '標準のUSBポートは通常5Vを出力しますが、リチウム電池の内部電圧は約3.7Vです。',
        'モバイルバッテリーの効率は通常80%から90%の範囲です。'
    ],
    'errorMessage' => '有効な数値を入力してください。'
];
?>