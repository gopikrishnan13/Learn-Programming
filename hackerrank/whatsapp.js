const puppeteer = require("puppeteer");

async function scrape(url) {
  const browser = await puppeteer.launch({ headless: false });
  const page = await browser.newPage();
  await page.goto(url);
  await page.waitForSelector("span [title='Ajay_Machi_Sch']");
  const target = await page.$("span [title='Ajay_Machi_Sch']");
  await target.click();
  const inp = await page.$(
    "#main > footer > div._3ee1T._1LkpH.copyable-area > div._3uMse > div > div._3FRCZ.copyable-text.selectable-text"
  );

  for (let i = 0; i < 10; i++) {
    await inp.type("ok this is magic");
    await page.keyboard.press("Enter");
  }
}

scrape("https://web.whatsapp.com");