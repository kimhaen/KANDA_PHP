package jp.co.f1.superintro.test;

import java.util.Scanner;

public class Season {

	public static void main(String[] args) {

		Scanner scn = new Scanner(System.in);
		System.out.print("1から12のうち、好きな月を入力してください -->");
		int month = scn.nextInt();

		if(month==3) {
			System.out.println("春です。");
		}else if(month==6) {
			System.out.println("夏です。");
		}else if(month==9) {
			System.out.println("秋です。");

		}else if(month==12) {
		System.out.println("冬です。");
		}else {
		System.out.println("季節未設定です。");
	}
	}
}
