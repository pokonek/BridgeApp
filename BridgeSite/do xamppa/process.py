import json


def read_file():
    with open('./players_progress.json') as f:
        ranking = json.load(f)
        print(ranking)
        a = {}
        for id_turnieju, wyniki_userow in ranking.items():
            for user_id, user_score in wyniki_userow.items():
                user_id = user_id[:-2]
                if not user_id in a:
                    a[user_id] = {}
                else:
                    a[user_id][id_turnieju] = user_score
    return a

results = read_file()

for user_id, user_data in results.items():
    with open(f"./results/{user_id}.json", 'w') as f:
        print(f"Writing user {user_id} data to file")
        f.write(json.dumps(user_data))


read_file()
