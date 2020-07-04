package jp.co.f1.superintro.test;

import java.util.Scanner;

public class CountSheep {

	public static void main(String[] args) {

		Scanner scn = new Scanner(System.in);
		System.out.print("繰り返す回数を入力して下さい＞");

		int countSheep = scn.nextInt();

		for(int i = 1;i<=countSheep;i++) {
			System.out.println("羊が「"+i+"」匹");
		}
			System.out.println("おやすみなさい");

	}

}
