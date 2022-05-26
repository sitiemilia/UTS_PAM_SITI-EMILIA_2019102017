import "package:intl/intl.dart";

class CurrencyFormat {
  static String convertToIdr(dynamic number, int decimalDigit) {
    var NumberFormat;
    NumberFormat currencyFormatter = NumberFormat.currency(
      locale: 'id',
      symbol: 'Rp ',
      decimalDigits: decimalDigit,
    );
    return currencyFormatter.format(number);
  }
}
