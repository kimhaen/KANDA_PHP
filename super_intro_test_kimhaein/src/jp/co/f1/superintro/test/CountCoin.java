package jp.co.f1.superintro.test;

public class CountCoin {

	public static void main(String[] args) {
		System.out.println("ゲーム開始！");


		int count = 0;

		while (true) {
			int coin = (int) (Math.random() * 2);

			if (coin==1) {
				System.out.println("コイントスの結果「裏」が出ました。");
				count++;
				continue;
			}

			if(coin==0) {
				System.out.println("コイントスの結果「表」が出ました。");
				count++;
				break;
			}

		}

		System.out.println(count + "回目でコイントスが終わりました。");
	}

}
