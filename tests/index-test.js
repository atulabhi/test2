import { Selector } from 'testcafe';

fixture `Getting Started`
    .page `http://127.0.0.1:5500/openebs_pro/index.html`;

test("unit test", async t => {
    await t
        .expect(Selector('#openebs05-sec').find('h2').nth(0).innerText).eql('OpenEBS 0.5');
});
