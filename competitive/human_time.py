import datetime
def format_duration(n):
    if n > 0:
        time = str(datetime.timedelta(seconds = n))
        time = time.split(" ")

        yd = ""
        
        if len(time) == 3:
            if int(time[0]) >= 365:
                years = int(time[0])//365
                if years == 1:
                    yd += str(years) + " year, "
                else:
                    yd += str(years) + " years, "
                
            days = int(time[0]) - (int(time[0])//365)*365
            if days == 1:
                yd += str(days) + " day,"
            if days > 1 :
                yd += str(days) + " days,"
                
            yd = yd.split(" ")
            
        if len(time) >= 1:
            hms = time[-1].split(":")
            hms = [int(i) for i in hms]
            
        
            if int(hms[2]) > 0:
                if int(hms[2]) == 1:
                    hms[2] = str(hms[2]) + " second"
                else:
                    hms[2] = str(hms[2]) + " seconds"

            if int(hms[1]) > 0:
                if int(hms[1]) == 1:
                    hms[1] = str(hms[1]) + " minute,"
                else:
                    hms[1] = str(hms[1]) + " minutes,"

            if int(hms[0]) > 0:
                if int(hms[0]) == 1:
                    hms[0] = str(hms[0]) + " hour,"
                else:
                    hms[0] = str(hms[0]) + " hours,"


        time = []
        [time.append(x) for x in yd]
        [time.append(x) if x != 0 else True for x in hms]


        if len(time) > 1:
            time.append("and")
            time[-1],time[-2] = time[-2],time[-1]
            time[-3] = time[-3].replace(",", "")
        
        time[-1] = time[-1].replace(",", "")

        time = " ".join(time)
        
        return time
    else:
        return "now"

print(format_duration(62))

