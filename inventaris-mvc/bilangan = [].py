bilangan = []

while True:
    angka = int(input("Masukkan bilangan (0=berhenti): "))

    if angka == 0:
        break

    bilangan.append(angka)

if len(bilangan) > 0:
    print("Banyak bilangan =", len(bilangan))
    print("Terbesar =", max(bilangan))
    print("Terkecil =", min(bilangan))
    print("Rata-rata =", sum(bilangan) / len(bilangan))
else:
    print("Tidak ada bilangan yang dimasukkan")