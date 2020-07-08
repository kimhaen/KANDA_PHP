package jp.co.f1.superintro.test;

public class CountNumber {

	public static void main(String[] args) {

		System.out.println("1から10まで教えます。");
		System.out.println();

		for (int i = 1; i <= 10; i++) {
			if (i % 3 == 0) {
				System.out.println(i + " !");
			} else {
				System.out.println(i);

			}
		}
		System.out.println();
		System.out.println("数え終わりました！");
	}

}
